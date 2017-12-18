<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
|  - fonatrac
|  - itzaman
|  - dgas
|  - comunicados
|  - convenios
|  - rprevio
|  - moduferr
|  - jtecnica
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','inicio');

Route::view('aa-admin','admin.inicio');

Route::get('asociados',function(){
	return \App\agentes::with('agencias')->get();
});

Route::resource('agentes', 'AgentesController');

Route::resource('agencias', 'AgenciaController');

Route::resource('fonatrac', 'FonatracController');



// Route::get('itzaman', function () {
//     return "MODULO DE ITZAMAN";
// });

// Route::get('dgas', function () {
//     return "MODULO DE DGAS";
// });

// Route::get('comunicados', function () {
//     return "MODULO DE COMUNICADOS";
// });

// Route::get('convenios', function () {
//     return "MODULO DE CONVENIOS";
// });

// Route::get('rprevio', function () {
//     return "MODULO DE REPORTE DE PREVIOS";
// });

// Route::get('moduferr', function () {
//     return "MODULO DE MODULACION FERROCARRIL";
// });

// Route::get('jtecnica', function () {
//     return "MODULO DE JUNTAS TECNICAS";
// });

// Route::get('preva', function () {
//     return "MODULO DE PREVALIDADOR";
// });