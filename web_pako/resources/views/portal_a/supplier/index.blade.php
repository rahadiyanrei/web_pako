@extends('portal_a.layout')

@section('title', 'Supplier - Portal Vendor Company A')

@section('content')
<main>
    <div class="container">
        <h1>Supplier Management</h1>
        <p>Manage your supplier information and documents.</p>
        
        <h2>Supplier Menu</h2>
        <ul>
            <li><a href="/portal/supplier/po">Purchase Orders (PO)</a></li>
            <li><a href="/portal/supplier/dn">Delivery Notes (DN)</a></li>
        </ul>
        
        <h2>Supplier Information</h2>
        <p>Company Name: Your Company Ltd.</p>
        <p>Supplier ID: SUP-001</p>
        <p>Status: Active</p>
    </div>
</main>
@endsection
