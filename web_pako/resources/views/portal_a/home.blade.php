@extends('portal_a.layout')

@section('title', 'Home - Portal Vendor Company A')

@section('content')
<header>
    <div class="container">
        <h1>Welcome to Vendor Portal - Company A</h1>
        <p><span class="portal-badge">Company A</span></p>
    </div>
</header>

<main>
    <div class="container">
        <h2>Portal Overview</h2>
        <p>Manage your supplier activities with Company A through this portal.</p>
        
        <h2>Quick Links</h2>
        <ul>
            <li><a href="/portal/supplier">Supplier Management</a></li>
            <li><a href="/portal/supplier/po">Purchase Orders</a></li>
            <li><a href="/portal/supplier/dn">Delivery Notes</a></li>
        </ul>
        
        <h2>Notifications</h2>
        <p>You have 3 new purchase orders waiting for review.</p>
    </div>
</main>
@endsection
