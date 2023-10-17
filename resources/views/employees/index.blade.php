@extends('layouts.app')

@section('page-title','Employee List')
@section('content')
    <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>
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


