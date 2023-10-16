@extends('employees.home')

@section('content')


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Employees</title>
       <!-- <style>
            table {
      border-collapse: collapse;
      width: 100%;
      padding top: 10%;
    }
    th, td {
      border: 2px solid lightblue;
      padding: 8px;
      text-align: left;

    }

    th {
      background-color: mediumaquamarine;
    }
    h1{
        text-align: center
        content: '\F0179';
    }
        </style>-->


    </head>
    <body>
        <h1 style="text-align: center">Employee List</h1>
        <div>
            @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif
        </div>
    </body>
    </html>
<div>
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>

</div>

    @if ($employees->isEmpty())
        <div class="alert alert-info" role="alert">
            No employees found.
        </div>
    @else

        <table class="table">
            <thead class="table">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>ID Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->id_number }}</td>

                        <td>
                            <a href="{{ route('employees.show', $employee) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection


