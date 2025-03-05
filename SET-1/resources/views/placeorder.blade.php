@extends('layout')

@section('content')

<h1 class="title">Place Your Order</h1>

<div class="form-container">
    <form action="/submitform" method="POST">
        @csrf
        <label>Item Name:</label>
        <input type="text" name="item_name" required>

        <label>Category:</label>
        <select name="category" required>
            <option value="Fast Food">Fast Food</option>
            <option value="Italian">Italian</option>
            <option value="Desserts">Desserts</option>
        </select>

        <label>Description:</label>
        <textarea name="description" required></textarea>

        <label>Price ($):</label>
        <input type="number" name="price" step="0.01" required>

        <label>Your Name:</label>
        <input type="text" name="customer_name" required>

        <label>Your Email:</label>
        <input type="email" name="customer_email" required>
        <br>

        <button type="submit">Place Order</button>
    </form>
</div>


@endsection
