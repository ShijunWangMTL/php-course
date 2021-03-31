@extends('layout')
@section('content')
<center>
    <h1>Student Registration</h1>
    <hr>
</center>
<div class="row justify-content-md-center">
    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="register">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student ID</label>
                <input type="text" name="name" class="form-control" placeholder="Enter student ID" aria-describedby="emailHelp">
            </div>
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter Email address" aria-describedby="emailHelp">
            </div> -->
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" aria-describedby="passwordHelpBlock">
            </div>
            <button type="submit" class="btn btn-primary float-end">Register</button>
        </form>
    </div>
</div>
@endsection