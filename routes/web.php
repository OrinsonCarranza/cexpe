<?php

use Illuminate\Support\Facades\Route;

$talleres = [
    ['titulo' => 'Danza'],
    ['titulo' => 'Baile'],    
    ['titulo' => 'Oratoria'],
    ['titulo' => 'Liderazgo'],
];

Route::view('/','inicio') ->name ('inicio');
Route::view('programas','programas') ->name ('programas');
Route::get('talleres', 'App\Http\Controllers\Talleres@talleres') ->name ('talleres');;
Route::view('asesoramiento','asesoramiento') ->name ('asesoramiento');
Route::view('contacto','contacto') ->name ('contacto');

