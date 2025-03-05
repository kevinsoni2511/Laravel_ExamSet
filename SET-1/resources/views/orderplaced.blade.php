@extends('layout')

@section('content')

<div class="order-container">
    <h1 class="success-message">Order Placed Successfully!</h1>
    <p class="thank-you">Thank you, <strong>{{ $data['customer_name'] }}</strong>. Your order has been received.</p>

    <h3 class="order-heading">Order Details:</h3>
    <table class="order-table">
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="key">{{ ucfirst(str_replace('_', ' ', $key)) }}</td>
                    <td class="value">{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    
</style>

@endsection
