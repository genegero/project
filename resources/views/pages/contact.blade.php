<!-- contact.blade.php -->

@extends('employees.home')

@section('content')
<h2 class="con">Contact Us</h2>
<p>This is the content of the contact page.</p>
<form method="POST" action="/submit-post">
    @csrf <!-- Include CSRF token for security -->
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" required></textarea><br>

    <button type="submit">Submit</button>
</form>
@endsection
