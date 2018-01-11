<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/register', function(){
    return view('auth.register');
});

Route::resource('pacientes', 'PacienteController');

Route::resource('medicos', 'MedicoController');

Route::resource('exames', 'ExameController');

Route::resource('medicamentos', 'MedicamentoController');

Route::resource('consultas', 'ConsultaController');

Route::resource('prescricaos', 'PrescricaoController');

Route::resource('userLogins', 'UserLoginController');
