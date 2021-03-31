<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        return view('adminHome');
    }

    function list()
    {
        $courses = Course::paginate(6);; //::simplePaginate()
        return view('list', ["courses" => $courses]);
    }
    function add(Request $req)
    {
        //return $req->input();  
        $course = new Course;
        $course->courseName = $req->input('courseName');
        $course->instructor = $req->input('instructor');
        $course->textbook = $req->input('textbook');
        $course->save();
        $req->session()->flash('status', 'The course was added successfully.');
        return redirect('list');
    }
    function delete($id)
    {
        Course::find($id)->delete();
        Session::flash('status', 'The course was deleted.');
        return redirect('list');
    }
    function edit($id)
    {
        //return Course::find($id);
        $course = Course::find($id);
        return view('edit', ["course" => $course]);
    }
    function update(request $req)
    {
        $course = Course::find($req->id);
        $course->courseName = $req->input('courseName');
        $course->instructor = $req->input('instructor');
        $course->textbook = $req->input('textbook');
        $course->save();
        Session::flash('status', 'The course was updated.');
        return redirect('list');
    }
    function search() {
        $searchName = $_GET['searchName'];
        $searchResult = Course::where('stName', 'LIKE', '%'.$searchName.'%')->paginate(5);
        return view('search', ["searchResult" => $searchResult]);
    }


}
