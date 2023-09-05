<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Userconnected;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\DepartementController;

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

Route::get('/',[AuthController::class ,'index'])->name('login');
Route::post('/submite',[AuthController::class,'store'])->name('submit-login');

Route::middleware(Userconnected::class)->group(function () {
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

Route::prefix('/departement')->group(function(){
    Route::get('/index',[DepartementController::class,'index'])->name('departement.liste');
    Route::post('/create',[DepartementController::class,'store'])->name('departement.creat');
    Route::get('/voire/{departement}',[DepartementController::class,'show'])->name('departement.voire');
    Route::put('/update/{departement}', [DepartementController::class, 'update'])->name('departement.update');
    Route::get('/{departement}', [DepartementController::class , 'delete'])->name('departement.delete');


});


Route::prefix('/personnel')->group(function(){
    Route::get('/index',[PersonnelController::class , 'index'])->name('employer.liste');
    Route::get('/recherche' , [PersonnelController::class , 'recherche'])->name('employer.recherche');
    Route::post('/creation', [PersonnelController::class,'store'])->name('employer.create');
    Route::get('/modifier/{personnel}',[PersonnelController::class, 'update'])->name('personnel.voire');
    Route::get('/delet/{personnel}',[PersonnelController::class, 'delete'])->name('personnel.delete');
    Route::post('/update/{personnel}', [PersonnelController::class, 'modifier'])->name('personnel.update');
});

// Route personnel

Route::get('/Employer', [EmployerController::class,'index'])->name('employer');

Route::prefix('/utilisateur')->group(function(){
    Route::post('/heure', [EmployerController::class,'store'])->name('pointage.store');
    Route::get("/pointage/liste",[EmployerController::class,'liste'])->name('pointage.liste');
});

});

