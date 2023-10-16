
@extends('employees.home')

@section('content')
    <h1>Employee details</h1>

    <div class="card">
        <div class="card-body">
            <h3>Name: {{ $employee->name }}</h3>
            <p>Email: {{ $employee->email }}</p>
            <p>Phone: {{ $employee->phone }}</p>
            <div class="form-group"><br>
                <label for="age">Age</label>
                <input type="number" id="age" name="age" class="form-control" value="{{ $employee->age }}">
            </div>

            <div class="form-group"><br><br>
                <label for="id_number">ID Number</label>
                <input type="text" id="id_number" name="id_number" class="form-control" value="{{ $employee->id_number }}">
            </div>

           <!--  <button type="submit" class="btn btn-primary">Update</button>  -->
        </form>
    </div>
</div>
@endsection
