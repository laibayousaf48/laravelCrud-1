<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){
        $students = DB::table('students')
        ->rightJoin('cities', 'students.city', '=', 'cities.id')
        // ->simplePaginate(4);
        // ->select(DB::raw('count(*) as student_count'), 'students.city as city')
        // ->groupBy('city')
        ->get();
return $students;
        // return view('student', ['data' => $students]);
    }

    public function unionData(){
        
    //     $lecturers = DB::table('lecturers')
    //     ->join('cities', 'lecturers.city', '=', 'cities.id');
    //     $students = DB::table('students')
    //     ->join('cities', 'students.city', '=', 'cities.id')
    //     ->select('students.*')
    //     ->union($lecturers)
    //     ->get();
    // return $students;

    $students = DB::table('students')
    ->select('students.name', 'students.email', 'cities.city')
    ->join('cities', 'students.city', '=', 'cities.id');
    // ->where('students.city', '=', 'New York');


$lecturers = DB::table('lecturers')
->union($students)
->select('lecturers.name', 'lecturers.email', 'cities.city')
    ->join('cities', 'lecturers.city', '=', 'cities.id');
    // ->where('lecturers.city', '=', 'Housten');
    // ->get(); 
$allUsers = $students->union($lecturers)->paginate(10);

return $allUsers;





    }
}
