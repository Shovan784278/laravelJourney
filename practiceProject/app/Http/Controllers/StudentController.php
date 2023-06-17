<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students = [
        [
            'name' => 'Shovan Nag',
            'Subject' => 'PHP and Laravel'
        ],

        [
            'name' => 'John Doe',
            'Subject' => 'React'
        ],

        [
            'name' => 'John Dev',
            'Subject' => 'MERN'
        ],

        [
            'name' => 'Harry poles',
            'subject' => 'Vue.Js'
        ],

        [
            'name' => 'Tom helfik',
            'subject' => 'Next.js'
        ]
    ];

    function student(){

        return $this->students;
    }

    function getStudent($id){

        $studentId = $id-1;
        return $this->students[$studentId];
    }

    // function getName($id){

    //     $studentId = $id-1;
    //     return $this->students[$studentId]['name'];
    // }

    function getField($id, $field){

        $studentId = $id-1;
        $name = $this->students[$studentId];
        return $name[$field];
    }
}
