@extends('layout')

@section('pageTitle')
Course List
@endsection

@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible">
{{Session::get('status')}}
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
</div>
@endif
<div>
    <a class="btn btn-primary d-print-none" href="/add">Add Course</a>

    <hr><br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Instructor</th>
                <th scope="col">Textbook</th>
                <th scope="col" class="d-print-none">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <th scope="row">{{$course->id}}</th>
                <td>{{$course->courseName}}</td>
                <td>{{$course->instructor}}</td>
                <td>{{$course->textbook}}</td>
                <td class="d-print-none">
                    <a href="/edit/{{$course->id}}"><i class="fa fa-edit icon-green"></i></span></a>
                    &nbsp;
                    <a href="/delete/{{$course->id}}"><i class="fa fa-trash icon-red"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $courses->links() }}</div>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-outline-secondary float-end d-print-none" onclick="print()">Print</button>
        </div>
    </div>
</div>

@endsection