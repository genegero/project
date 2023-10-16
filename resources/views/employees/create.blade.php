@extends('employees.home')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddEmployee</title>


</head>

<body>
<!--   <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">   -->
<div class="card">
     <div class="card-header" style="color: blue">Create Employee</div>
    <div>
        <div class="card-body">

            <form action="{{ route('employees.store') }}" method="POST">
                @csrf

                 <div class="input-group mb-10">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Full name" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div><br>

                  <div class="input-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div><br>

                  <div class="input-group mb-3">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                      </div>
                    </div>
                  </div><br>

    <div class="input-group mb-3">
        <input type="number" id="age"  name="age" class="form-control" placeholder="age" required>
        <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
</div><br>

 <div class="input-group mb-3">
    <input type="text" id="ID_number" name="ID_number" class="form-control" placeholder="ID Number" required>

  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-id-card"></span>
    </div>
  </div>
</div>
</div>
<br>
<div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Create</button>
    </div>
     </form>
        </div>
    </div>

</div>


 <!--
</div>
</div>
</div>
</div>
</div>
</section>-->

@endsection
</body>
</html>
