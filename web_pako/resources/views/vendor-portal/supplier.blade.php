<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier - Vendor Portal A</title>
</head>
<body>
    <h1>Supplier Management</h1>
    <nav>
        <a href="{{ route('portal.dashboard') }}">Dashboard</a> | 
        <a href="{{ route('portal.supplier') }}">Supplier</a> | 
        <a href="{{ route('portal.po') }}">Purchase Orders</a> | 
        <a href="{{ route('portal.dn') }}">Delivery Notes</a>
    </nav>
    <hr>
    <p>Manage supplier information here.</p>
</body>
</html>
