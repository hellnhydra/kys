<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ConferencesController;





Route::get('/', function () {
    return view('index');
})->name('home');


Route::resource('admin.conferences', App\Http\Controllers\Admin\ConferenceController::class);
Route::prefix('client')->name('client.')->group(function () {
    Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::post('/conferences/{conference}/register', [ConferenceController::class, 'register'])->name('conferences.register');
    Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');
    Route::get('/conference/{id}', [ClientController::class, 'show'])->name('conference.show');
    Route::post('/conference/register', [ClientController::class, 'register'])->name('conference.register');
});
Route::prefix('conferences')->group(function () {
    Route::get('/', [ConferenceController::class, 'index'])->name('conferences.index'); 
    Route::get('/create', [ConferenceController::class, 'create'])->name('conferences.create'); 
    Route::post('/', [ConferenceController::class, 'store'])->name('conferences.store'); 
});

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index'])->name('conferences.index');
    Route::get('/conference/{id}', [EmployeeController::class, 'show'])->name('conference.show');
});
Route::get('/conferences', [ConferenceController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/', function () {
        return view('admin.index'); 
    })->name('dashboard');
    Route::get('/conferences', [ConferenceController::class, 'index']);
    
    Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
    Route::get('/conference/create', [ConferenceController::class, 'create'])->name('conference.create');
    Route::post('/conference/store', [ConferenceController::class, 'store'])->name('conference.store');
    Route::get('/conference/{id}/edit', [ConferenceController::class, 'edit'])->name('conference.edit');
    Route::post('/conference/{id}/update', [ConferenceController::class, 'update'])->name('conference.update');
    Route::post('/conference/{id}/delete', [ConferenceController::class, 'destroy'])->name('conference.destroy');

    
    Route::prefix('admin')->name('admin.')->group(function (){
        
    });
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); 
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy'); 
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
    Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
    Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
    Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
    Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
    Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index'); 
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); 
    Route::post('/users', [UserController::class, 'store'])->name('users.store'); 
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); 
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update'); 
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy'); 
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
});
Route::get('/conferences', [ConferencesController::class, 'index'])->name('conferences.index');
Route::get('/client/conferences', [ConferencesController::class, 'index']);
Route::post('/conferences/register/{id}', [ConferencesController::class, 'register'])->name('conferences.register');
Route::resource('conferences', ConferenceController::class);

Route::get('/employee/conferences', [ConferenceController::class, 'index'])->name('employee.conferences.index');
Route::resource('conferences', ConferenceController::class);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('conferences', ConferenceController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('conferences', ConferenceController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('conferences', App\Http\Controllers\Admin\ConferenceController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('conferences', App\Http\Controllers\Admin\ConferenceController::class);
});