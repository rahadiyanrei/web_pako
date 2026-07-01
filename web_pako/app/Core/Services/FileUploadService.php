<?php

namespace App\Core\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RuntimeException;

/**
 * Secure File Upload Service.
 * 
 * Features:
 * - MIME type validation
 * - Magic byte (file signature) validation
 * - Safe filename generation
 * - Size limits
 * - Storage outside public directory
 */
class FileUploadService
{
    private string $uploadPath;
    private array $allowedMimes;
    private int $maxSize; // in KB

    public function __construct(
        string $uploadPath = 'uploads',
        array $allowedMimes = ['image/jpeg', 'image/png', 'application/pdf'],
        int $maxSize = 5120 // 5MB default
    ) {
        $this->uploadPath = $uploadPath;
        $this->allowedMimes = $allowedMimes;
        $this->maxSize = $maxSize;
    }

    /**
     * Store an uploaded file securely.
     *
     * @param UploadedFile $file
     * @return string Stored file path relative to storage/app
     * @throws RuntimeException
     */
    public function store(UploadedFile $file): string
    {
        // 1. Validate Size
        if ($file->getSize() > ($this->maxSize * 1024)) {
            throw new RuntimeException('File size exceeds maximum allowed limit.');
        }

        // 2. Validate MIME Type
        $mimeType = $file->getMimeType();
        if (!in_array($mimeType, $this->allowedMimes, true)) {
            throw new RuntimeException('Invalid file MIME type.');
        }

        // 3. Validate Magic Bytes (File Signature)
        if (!$this->validateMagicBytes($file)) {
            throw new RuntimeException('File signature does not match MIME type.');
        }

        // 4. Generate Safe Filename
        $safeName = $this->generateSafeName($file);

        // 5. Store in private disk (not public)
        $path = $file->storeAs($this->uploadPath, $safeName, 'private');

        Log::info('File uploaded securely', [
            'original_name' => $file->getClientOriginalName(),
            'stored_path' => $path,
            'mime' => $mimeType
        ]);

        return $path;
    }

    /**
     * Validate file magic bytes against MIME type.
     */
    private function validateMagicBytes(UploadedFile $file): bool
    {
        $handle = fopen($file->getRealPath(), 'rb');
        $header = fread($handle, 12);
        fclose($handle);

        if ($header === false) {
            return false;
        }

        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $realMimeType = $finfo->buffer($header);

        return $realMimeType === $file->getMimeType();
    }

    /**
     * Generate a safe, unique filename.
     */
    private function generateSafeName(UploadedFile $file): string
    {
        $extension = $file->guessExtension() ?? $file->getClientOriginalExtension();
        return Str::random(32) . '.' . $extension;
    }
}
