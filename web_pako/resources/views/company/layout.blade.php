<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Website')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        nav { background: #333; color: white; padding: 1rem; }
        nav ul { list-style: none; display: flex; gap: 20px; }
        nav a { color: white; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        header { background: #f4f4f4; padding: 2rem 0; text-align: center; }
        main { padding: 2rem 0; }
        footer { background: #333; color: white; text-align: center; padding: 1rem; margin-top: 2rem; }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/bod">Board of Directors</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer>
        <p>&copy; {{ date('Y') }} Company Name. All rights reserved.</p>
    </footer>
</body>
</html>
