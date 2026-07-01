@extends('modules.portal.layouts.app')

@section('title', 'Home - Portal Vendor Company A')

@section('content')
<h1>Welcome to Vendor Portal - Company A</h1>
<p>This is the dedicated portal for Company A vendors. Manage your supplier information, purchase orders, and delivery notes here.</p>
<ul>
    <li><a href="{{ route('portal.supplier.index') }}">Supplier Management</a></li>
    <li><a href="{{ route('portal.supplier.po') }}">Purchase Orders</a></li>
    <li><a href="{{ route('portal.supplier.dn') }}">Delivery Notes</a></li>
</ul>
@endsection
