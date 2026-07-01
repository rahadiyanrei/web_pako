<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Load Module Routes
|--------------------------------------------------------------------------
|
| Routes for each module are loaded from their respective module directories.
| This keeps the main routes file clean and maintains modular architecture.
|
*/

// Load WebPako Module Routes (Company Website)
require base_path('modules/WebPako/Routes/web.php');

// Load Portal Module Routes (Company A)
require base_path('modules/Portal/Routes/web.php');

// Load PortalInko Module Routes (Company B)
require base_path('modules/PortalInko/Routes/web.php');
