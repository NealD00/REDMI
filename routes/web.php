<?php

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


Route::get('/', function () {
    return view('inicio');
});


//route::get('/contacto',[HomeController::class,'contacto']);

Route::get('/contacto', function (){
    return view('contacto');
}) -> name ('contacto');


Route::get('/eventos', function (){
    return view('eventos');
}) -> name ('eventos');

Route::get('/programas', function (){
    return view('programas');
}) -> name ('programas');

Route::get('/nosotras', function (){
    return view('nosotras');
}) -> name ('nosotras');

//livewire sirve para funcions tipo javascript 
//esta es una opcion de usar rutas sin necesidad de controller
#Route::get('/contactos', \App\Http\Livewire\Contactnos::class)->name('contactanos');