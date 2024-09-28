<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')
        // ->where('city', 'Islamabad')
        ->paginate(4);
        return view('allUsers', ['data'=> $users]);
    }
    public function singleUser($id){
        $user = DB::table('users')->where('id', $id)->get();
        return view('user', ['data' => $user]);
    }
    public function addUser(UserRequest $req){
        // $req->validate([
            // 'name' => 'required',
            // 'email' => 'required|email|unique:users,email',
            // 'age' => 'required|numeric|between:18,45',
            // 'city' => 'required',
        // ]);
        $user = DB::table('users')
        ->insert([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        if($user){
            return redirect()->route('home')->withMessage('User Added Successfully!!');
        }else{
            echo "<h1>Data not added</h1>";
        }
    }

    public function updatePage($id){
        $user = DB::table('users')->find($id);
        return view('updateUser', ['data' => $user]);
        if($user){
            return redirect()->route('home')->withMessage('User updated Successfully!!');
        }else{
            echo "<h1>Data not updated</h1>";
        }
    }

    public function updateUser($id, Request $req){
        $user = DB::table('users')->where('id', $id)
       ->update([
        'name' => $req->name,
        'email'=> $req->email,
        'age'=> $req->age,
        'city'=> $req->city,
       ]);
        if($user){
            return redirect()->route('home')->withMessage('User updated Successfully!!');
        }else{
            echo "<h1>Data not updated</h1>";
        }
    }

    public function deleteUser($id){
        $user = DB::table('users')
        ->where([
            'id'=> $id
        ])
        ->delete();
        if($user){
            return redirect()->route('home');
        }else{
            echo "<h1>Data not deleted</h1>";
        }
    }
}
