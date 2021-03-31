@extends('layout')

@section('pageTitle')
<br>
Student List
@endsection

@section('content')

@if(Session::get('status'))
<div class="alert alert-success alert-dismissible">
{{Session::get('status')}}
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
</div>
@endif
<div>
    <a class="btn btn-primary d-print-none" href="/add">Add Student</a>
    <hr><br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Student No.</th>
                <th scope="col">Student Name</th>
                <th scope="col" class="d-print-none">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->stNum}}</td>
                <td>{{$student->stName}}</td>
                <td class="d-print-none">
                    <a href="/edit/{{$student->id}}"><i class="fa fa-edit icon-green"></i></span></a>
                    &nbsp;
                    <a href="/delete/{{$student->id}}"><i class="fa fa-trash icon-red"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $students->links() }}</div>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-outline-secondary float-end d-print-none" onclick="print()">Print</button>
        </div>
    </div>
</div>

@endsection