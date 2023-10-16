<!-- home.blade.php -->

@extends('employees.home')

@section('content')
<style>
    div {
        margin-top: 20px;
    }
</style>

<h2>Welcome to the Home Page</h2>
<p>Click the link below to register:</p><br>
<a href="/registration.html">Register Here</a><br>
<a href="https://www.w3schools.com">Visit W3Schools</a><br>
<div style="border: 5px dotted violet;">
    <form action="/reg" method="post">
        @csrf

        <h1>Rigester</h1><br>
        <input type="text" placeholder="name">
        <input type="text" placeholder="emial">
        <input type="password" placeholder="password">
        <button>login</button>

    </form>
</div>

@endsection
