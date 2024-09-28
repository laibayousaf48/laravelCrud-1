<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        // for($i=1; $i<=10; $i++){
        //    student::create([
        //     'name'=> fake()->name(),
        //     'email'=>fake()->unique()->email()
        //    ]);
        // }

       $json = File::get(path:'database/json/student.json');
       $students = collect(json_decode($json));
       $students->each(function($student){
            student::create([
            'name'=> $student->name,
            'email' => $student->email,
            'age' => $student->age,
            'city' => $student->city,
        ]);
            });
       
    }
}
