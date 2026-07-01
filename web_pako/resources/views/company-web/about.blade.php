<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Company Website</title>
</head>
<body>
    <h1>About Us</h1>
    <nav>
        <a href="{{ route('company.home') }}">Home</a> | 
        <a href="{{ route('company.about') }}">About</a> | 
        <a href="{{ route('company.contact') }}">Contact</a> | 
        <a href="{{ route('company.bod') }}">Board of Directors</a>
    </nav>
    <hr>
    <p>Learn more about our company history and mission.</p>
</body>
</html>
