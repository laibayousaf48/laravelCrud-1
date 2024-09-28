<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

function getUsers(){
    return [
        [1, "Alice Smith", 28, "alice@example.com", "Active"],
        [2, "Bob Johnson", 34, "bob@example.com", "Inactive"],
        [3, "Charlie Brown", 22, "charlie@example.com", "Active"],
        [4, "Diana Prince", 30, "diana@example.com", "Active"],
        [5, "Edward Elric", 26, "edward@example.com", "Inactive"]
    ];
    
}

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(PageController::class)->group(function(){
//     Route::get('/',  'showHome')->name('home');
//     Route::get('/user/{id}', 'showUser')->name('users');
//     Route::get('/blog', 'showBlog')->name('blog');
// });


// crud routes
Route::controller(UserController::class)->group(function(){
    Route::get('/', 'showUsers')->name('home');
    Route::get('/user/{id}',  'singleUser')->name('viewUser');
    Route::post('/add', 'addUser')->name('addNewUser');
    Route::put('/update/{id}', 'updateUser')->name('updateUser');
    Route::get('/updatepage/{id}', 'updatePage')->name('updatepage');
    Route::get('/delete/{id}', 'deleteUser')->name('deleteUser');
    
});


Route::view('/addUser', 'addUser');



// Route::get('/', [StudentController::class, 'showStudents']);
// Route::get('/union', [StudentController::class, 'unionData']);

//  Route::get('/users', function () {
//     $usersList = getUsers();
//     return view('users', ['users'=> $usersList]);
//  });

//  Route::get('/user/{id}', function ($id) {
//     $usersList = getUsers();
//     abort_if(!isset($usersList[$id - 1]), 404);
//     $user = $usersList[$id -1 ];
//     return view('user', ['user'=> $user]);
//  })->name('user');