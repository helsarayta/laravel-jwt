<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getAll() {
        $listStudent = Student::all();
        if($listStudent->count() > 0) {
            return response()->json([
                'status'    => 200,
                'message'   => 'success retrieve data '.$listStudent->count(),
                'data'      => $listStudent
            ]);
        } else {
            return response()->json([
                'status'    => 500,
                'message'   => 'No data found !!'
            ]);
        }

    }
}
