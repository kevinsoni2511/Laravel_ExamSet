@extends('layout')

@section('content')
    <h1 class="title">-:WorkOut plan Details:-</h1>

    <div class="container">
        <div class="menu-grid">
            <!-- Product 1 -->
            <div class="card">
                <img src="{{ asset('images/1.png') }}" class="card-img" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Fat Loss</h5>
                    <p class="card-text">Price: $ 500</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <img src="{{ asset('images/2.png') }}" class="card-img" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Muscle Gain</h5>
                    <p class="card-text">Price: $ 600</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <img src="{{ asset('images/3.png') }}" class="card-img" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Endurance Training</h5>
                    <p class="card-text">Price: $ 350</p>
                </div>
            </div>
        </div>
    </div>

@endsection
