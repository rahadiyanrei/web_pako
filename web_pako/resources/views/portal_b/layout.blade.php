<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Vendor - Company B INKO')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        nav { background: #1a252f; color: white; padding: 1rem; }
        nav ul { list-style: none; display: flex; gap: 20px; }
        nav a { color: white; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        header { background: #27ae60; color: white; padding: 2rem 0; text-align: center; }
        main { padding: 2rem 0; }
        footer { background: #1a252f; color: white; text-align: center; padding: 1rem; margin-top: 2rem; }
        .portal-badge { background: #f39c12; padding: 5px 10px; border-radius: 3px; font-size: 0.8em; }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="/portal-inko">Portal Home</a></li>
                <li><a href="/portal-inko/supplier">Supplier</a></li>
                <li><a href="/portal-inko/supplier/po">Purchase Orders</a></li>
                <li><a href="/portal-inko/supplier/dn">Delivery Notes</a></li>
                <li><a href="/">Company Website</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer>
        <p>&copy; {{ date('Y') }} Portal Vendor - Company B (INKO). All rights reserved.</p>
    </footer>
</body>
</html>
