<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Web Pako - Company Website')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        nav { margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee; }
        nav a { margin-right: 20px; text-decoration: none; color: #333; font-weight: bold; }
        nav a:hover { color: #007bff; }
        h1 { color: #333; }
        .content { line-height: 1.6; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="{{ route('web_pako.home') }}">Home</a>
            <a href="{{ route('web_pako.about') }}">About</a>
            <a href="{{ route('web_pako.contact') }}">Contact</a>
            <a href="{{ route('web_pako.bod') }}">Board of Directors</a>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
