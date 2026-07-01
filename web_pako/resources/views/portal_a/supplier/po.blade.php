@extends('portal_a.layout')

@section('title', 'Purchase Orders - Portal Vendor Company A')

@section('content')
<main>
    <div class="container">
        <h1>Purchase Orders (PO)</h1>
        <p>View and manage your purchase orders.</p>
        
        <h2>Recent Purchase Orders</h2>
        <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
            <thead>
                <tr>
                    <th>PO Number</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PO-2024-001</td>
                    <td>2024-01-15</td>
                    <td>Pending</td>
                    <td>$5,000.00</td>
                </tr>
                <tr>
                    <td>PO-2024-002</td>
                    <td>2024-01-10</td>
                    <td>Approved</td>
                    <td>$3,500.00</td>
                </tr>
                <tr>
                    <td>PO-2024-003</td>
                    <td>2024-01-05</td>
                    <td>Completed</td>
                    <td>$7,200.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
