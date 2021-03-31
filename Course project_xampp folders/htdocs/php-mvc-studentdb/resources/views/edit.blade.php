@extends('layout')

@section('pageTitle')
Edit Student
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="/edit">
            @csrf
            <div class="row mb-3">
                <input type="hidden" required name="id" value="{{$student->id}}" class="form-control" id="colFormLabel">
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Student Number</label>
                <div class="col-sm-9">
                    <input type="text" required name="stNum" value="{{$student->stNum}}" class="form-control" id="colFormLabel" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Student Name</label>
                <div class="col-sm-9">
                    <input type="text" required name="stName" value="{{$student->stName}}" class="form-control" id="colFormLabel" placeholder="">
                </div>
            </div>
            <a class="btn btn-secondary d-print-none" href="/list">Cancel</a>
            <input type="submit" value="Save" class="btn btn-primary float-end d-print-none">
        </form>
    </div>
</div>


@endsection