@extends('portal_b.layout')

@section('title', 'Home - Portal Vendor Company B INKO')

@section('content')
<header>
    <div class="container">
        <h1>Welcome to Vendor Portal - Company B (INKO)</h1>
        <p><span class="portal-badge">INKO</span></p>
    </div>
</header>

<main>
    <div class="container">
        <h2>Portal Overview</h2>
        <p>Manage your supplier activities with Company B (INKO) through this portal.</p>
        
        <h2>Quick Links</h2>
        <ul>
            <li><a href="/portal-inko/supplier">Supplier Management</a></li>
            <li><a href="/portal-inko/supplier/po">Purchase Orders</a></li>
            <li><a href="/portal-inko/supplier/dn">Delivery Notes</a></li>
        </ul>
        
        <h2>Notifications</h2>
        <p>You have 5 new purchase orders waiting for review.</p>
    </div>
</main>
@endsection
