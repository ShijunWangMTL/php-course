@extends('layout')
@section('content')
<center>
    <h1>Student Login</h1>
    <hr>
</center>
<div class="row justify-content-md-center">
    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="login">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student ID</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary float-end">Submit</button>
        </form>
    </div>
</div>
@endsection