@extends('layout')

@section('content')

     <div class="subscription-confirmation workout-container">
        <h1 class="success-message">Subscription Confirmed</h1>
        <p class="thank-you">Thank you, <strong>{{ $data['name'] }}</strong>! You have subscribed to the <strong>{{ $data['plan'] }}</strong> plan.</p>

    <h3 class="order-heading">-:Plan Details:-</h3>
    <table class="order-table">
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="key">{{ $key }}</td>
                    <td class="value">{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
