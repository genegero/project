
@extends('employees.home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logo</title>
</head>
<body>
    <h1>employee logo</h1>
    <img src="{{ asset('emplogo1.jpg') }}" alt="">
    @endsection

</body>
</html>
