@extends('layout')

@section('content')
    <h1 class="title">-:Menu Details:-</h1>

    <div class="container">
        <div class="menu-grid">
            <!-- Product 1 -->
            <div class="card">
                <img src="{{ asset('images/1.png') }}" class="card-img" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Burger</h5>
                    <p class="card-text">Price: Rs.500</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="card">
                <img src="{{ asset('images/2.png') }}" class="card-img" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Pizza</h5>
                    <p class="card-text">Price: Rs.450</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="card">
                <img src="{{ asset('images/3.png') }}" class="card-img" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Pasta</h5>
                    <p class="card-text">Price: Rs.350</p>
                </div>
            </div>
        </div>
    </div>

@endsection
