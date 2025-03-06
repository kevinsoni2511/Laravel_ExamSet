@extends('layout')

@section('content')

<h1 class="title">-:Place Your Order:-</h1>

<div class="form-container">
    <form action="/submitform" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="plan">Plan:</label>
        <select id="plan" name="plan" required>
            <option value="Fat Loss">Fat Loss</option>
            <option value="Muscle Gain">Muscle Gain</option>
            <option value="Endurance Training">Endurance Training</option>
        </select>

        <label>Description:</label>
        <textarea name="description" required></textarea>


        <label for="duration(in weeks)">Duration in Weeks:</label>
        <input type="number" id="duration(in weeks)" name="duration(in weeks)" min="1" required>        

        <label for="price">Price ($):</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>

        <button type="submit">Place Order</button>
    </form>
</div>


@endsection
