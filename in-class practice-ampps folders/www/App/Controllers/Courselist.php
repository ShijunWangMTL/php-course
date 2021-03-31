<?php
namespace App\Controllers;
use \Core\View;
use App\Models\Course;

class Courselist extends \Core\Controller
{
    public function showListAction()
    {
        $courses = Course::getList();
        View::renderTemplate('courselist.html', ['courses' => $courses]);
    }

    public function addAction()
    {
        $courses = Course::add();    
    }

    public function updateAction()
    {
        $courses = Course::update();    
    }



}
