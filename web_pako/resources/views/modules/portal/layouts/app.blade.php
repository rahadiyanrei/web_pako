<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal - Vendor Company A')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #e3f2fd; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        nav { margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee; }
        nav a { margin-right: 20px; text-decoration: none; color: #1976d2; font-weight: bold; }
        nav a:hover { color: #0d47a1; }
        h1 { color: #1976d2; }
        .content { line-height: 1.6; color: #666; }
        .portal-badge { display: inline-block; background: #1976d2; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <span class="portal-badge">Vendor Portal - Company A</span>
        <nav>
            <a href="{{ route('portal.home') }}">Home</a>
            <a href="{{ route('portal.supplier.index') }}">Supplier</a>
            <a href="{{ route('portal.supplier.po') }}">Purchase Orders</a>
            <a href="{{ route('portal.supplier.dn') }}">Delivery Notes</a>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
