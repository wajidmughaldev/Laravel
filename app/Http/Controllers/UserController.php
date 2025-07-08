<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class UserController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')
            ->join('cities', 'students.city', '=', 'cities.cid')
            ->select('students.*', 'cities.name as city_name')
            ->get();

        $totalRecords = DB::table('students')->get()->count();

        return view('students', ['students' => $students, 'totalRecords' => $totalRecords]);
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

    public function deleteSingleStudent(String $student_id)
    {
        $student = DB::table('students')->where('id', $student_id)->delete();
        return redirect()->back()->with('message', 'Student deleted successfully');

    }

    public function deleteStudents()
    {
        $student = DB::table('students')->truncate();
        return redirect()->back()->with('message', 'Student deleted successfully');

    }

    public function testingQueries()
    {

        $students = DB::table('students')
            // ->where('name', 'jaylen')
            // ->value('email')
            // ->find(1);
            // ->pluck('name','email');
            // ->orderByRaw('updated_at - created_at ASC')
            // ->get();    

            ->leftJoin('cities', 'students.city', '=', 'cities.cid')
            ->select(
                'students.*',
                'cities.name as city_name',
                'cities.state as city_state',
                'cities.country as city_country',
                'cities.zip_code as city_zip',
                'cities.created_at as city_created_at',
                'cities.updated_at as city_updated_at'
            )->get();

        @dd($students);
    }
}
