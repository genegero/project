@extends('employee.home')

@section('content')
    <div class="card">
        <div class="card-header">Update Employee</div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('employees.update', ['employee' => $employee->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $employee->name) }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $employee->email) }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone', $employee->phone) }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input id="age" type="number" class="form-control" name="age" value="{{ old('age', $employee->age) }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="id_number">ID Number</label>
                    <input id="id_number" type="text" class="form-control" name="id_number" value="{{ old('id_number', $employee->id_number) }}" required autofocus>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
