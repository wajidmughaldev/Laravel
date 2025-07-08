<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')
            ->join('cities', 'students.city', '=', 'cities.cid')
            ->select('students.*', 'cities.name as city_name')
            ->get();
        return view('students', ['students' => $students]);
    }

    public function showSingleStudent($id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        return view('pages.singleStudent', compact('student'));
    }
    public function showSingleStudentByCity($city_id)
    {
        $students = DB::table('students')
            ->join('cities', 'students.city', '=', 'cities.cid')
            ->where('cities.name', $city_id)
            ->select('students.*', 'cities.name as city_name')
            ->get();

        return view('pages.singleStudentByCity', ['students' => $students]);
   
    }
}
