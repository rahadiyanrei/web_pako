@extends('portal_a.layout')

@section('title', 'Delivery Notes - Portal Vendor Company A')

@section('content')
<main>
    <div class="container">
        <h1>Delivery Notes (DN)</h1>
        <p>View and manage your delivery notes.</p>
        
        <h2>Recent Delivery Notes</h2>
        <table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
            <thead>
                <tr>
                    <th>DN Number</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>PO Reference</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DN-2024-001</td>
                    <td>2024-01-16</td>
                    <td>Pending</td>
                    <td>PO-2024-001</td>
                </tr>
                <tr>
                    <td>DN-2024-002</td>
                    <td>2024-01-11</td>
                    <td>Delivered</td>
                    <td>PO-2024-002</td>
                </tr>
                <tr>
                    <td>DN-2024-003</td>
                    <td>2024-01-06</td>
                    <td>Delivered</td>
                    <td>PO-2024-003</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
