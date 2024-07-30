<?php

namespace App\Controllers;

use App\Models\Student;
//include_once 'app/models/Student.php';
//include_once 'app/controllers/BaseController.php';
class StudentController extends BaseController
{
    public $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    public function getStudent(){
        $students = $this->student->getListStudent();
        return $this->render('student.index',compact('students'));
    }
    public function addStudent()
    {

        return $this->render('student.add');
    }
    public function postStudent()
    {
        if (isset($_POST['add'])) {
            $name = $_POST['name'];
            $yearOfBirth = $_POST['year_of_birth'];
            $phoneNumber = $_POST['phone_number'];
            $this->student->addStudent(NULL,$name,$yearOfBirth,$phoneNumber);
            echo "Thêm thành công";
        }

    }
}
