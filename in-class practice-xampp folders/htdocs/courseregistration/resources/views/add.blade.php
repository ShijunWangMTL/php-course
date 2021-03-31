@extends('layout')

@section('pageTitle')
Add Course
@endsection

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-6 col-md-offset-3">
        <form method="post" action="">
            @csrf
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                    <input type="text" required name="courseName" class="form-control" id="colFormLabel" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Instructor</label>
                <div class="col-sm-8">
                    <input type="text" required name="instructor" class="form-control" id="colFormLabel" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Textbook</label>
                <div class="col-sm-8">
                    <input type="text" required name="textbook" class="form-control" id="colFormLabel" placeholder="">
                </div>
            </div>
            <a class="btn btn-secondary d-print-none" href="/list">Cancel</a>
            <input type="submit" value="Save" class="btn btn-primary float-end d-print-none">
        </form>
    </div>
</div>


@endsection