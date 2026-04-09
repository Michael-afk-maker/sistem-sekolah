<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';

use App\Core\COntroller;

class StudentController extends Controller
{

    public function index()
    {
        require_once '../app/views/students/index.php';
        $this->view('students.index');
    }

    public function create()
    {
        require_once '../app/views/students/create.php';
        $this->view('create.create');
    }


    public function show(string $id)
    {
        require_once '../app/views/students/show.php';
        $this->view('students.show');
    }

    public function edit(string $id)
    {
        require_once '../app/views/students/edit.php';
        $this->view('students.edit');
    }

    
}




