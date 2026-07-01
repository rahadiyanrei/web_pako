@extends('modules.portal_inko.layouts.app')

@section('title', 'Home - Portal Vendor Company B (INKO)')

@section('content')
<h1>Welcome to Vendor Portal - Company B (INKO)</h1>
<p>This is the dedicated portal for Company B (INKO) vendors. Manage your supplier information, purchase orders, and delivery notes here.</p>
<ul>
    <li><a href="{{ route('portal_inko.supplier.index') }}">Supplier Management</a></li>
    <li><a href="{{ route('portal_inko.supplier.po') }}">Purchase Orders</a></li>
    <li><a href="{{ route('portal_inko.supplier.dn') }}">Delivery Notes</a></li>
</ul>
@endsection
