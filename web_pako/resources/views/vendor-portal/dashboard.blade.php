<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vendor Portal A</title>
</head>
<body>
    <h1>Vendor Portal A - Dashboard</h1>
    <nav>
        <a href="{{ route('portal.dashboard') }}">Dashboard</a> | 
        <a href="{{ route('portal.supplier') }}">Supplier</a> | 
        <a href="{{ route('portal.po') }}">Purchase Orders</a> | 
        <a href="{{ route('portal.dn') }}">Delivery Notes</a>
    </nav>
    <hr>
    <p>Welcome to Company A Vendor Portal.</p>
</body>
</html>
