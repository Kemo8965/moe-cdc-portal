<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['namespace' => 'App\Http\Controllers'], function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    

    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/initialize-lesson', function(){
            return view('components.lessons.initialize.initialize-lesson');
        });

        Route::get('/create-lesson', function(){
            return view('components.lessons.create.create-lesson');
        });

        Route::get('/create-lesson2', function(){
            return view('components.lessons.create.create-lesson2');
        });

        Route::get('/create-lesson3', function(){
            return view('components.lessons.create.create-lesson3');
        });

        Route::get('/view-lesson', function(){
            return view('components.lessons.view.view-lesson');
        });

        Route::get('/view-lesson2', function(){
            return view('components.lessons.view.view-lesson2');
        });

        Route::get('/view-lesson3', function(){
            return view('components.lessons.view.view-lesson3');
        });

        Route::get('/spinner', function(){
            return view('components.spinners.spinner');
        });

        Route::get('/preview-lesson', function(){
            return view('components.lessons.preview.preview-lesson');
        });
    });

    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('/create', 'UsersController@create')->name('users.create');
        Route::post('/create', 'UsersController@store')->name('users.store');
        Route::get('/{user}/show', 'UsersController@show')->name('users.show');
        Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
        Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
        Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
    });

    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    require __DIR__.'/auth.php';
});