<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
// not be used
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class StudentController extends Controller
{
    function index()
    {
        return view('home');
    }
    function list()
    {
        $students = Student::paginate(6); //::simplePaginate()
        return view('list', ["students" => $students]);
    }
    function add(Request $req)
    { 
        $student = new Student;
        $student->stNum = $req->input('stNum');
        $student->stName = $req->input('stName');
        $student->save();
        $req->session()->flash('status', 'The student was added successfully.');
        return redirect('list');
    }
    function delete($id)
    {
        Student::find($id)->delete();
        Session::flash('status', 'The student was deleted.');
        return redirect('list');
    }
    function edit($id)
    {
        $student = Student::find($id);
        return view('edit', ["student" => $student]);
    }
    function update(request $req)
    {
        $student = Student::find($req->id);
        $student->stNum = $req->input('stNum');
        $student->stName = $req->input('stName');
        $student->save();
        Session::flash('status', 'The student was updated.');
        return redirect('list');
    }
    function search() {
        $searchName = $_GET['searchName'];
        $searchResult = Student::where('stName', 'LIKE', '%'.$searchName.'%')->paginate(5);
        return view('search', ["searchResult" => $searchResult, "searchName" => $searchName]);
    }


}