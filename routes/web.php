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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('getLogin');

Route::get('/logout', 'UsuarioController@Logout')->name('logout');

Route::post('/login', 'UsuarioController@Autentica')->name('postLogin');

Route::post('/cadastro', 'UsuarioController@Cria')->name('criaUsuario');

Route::get('/admin/filmes', 'FilmeController@IndexAdmin')->name('indexFilmeAdmin');
Route::post('/admin/filmes', 'FilmeController@Cria')->name('criaFilme');

Route::get('/admin/horarios', 'HorarioController@IndexAdmin')->name('indexHorarioAdmin');
Route::get('/admin/horarios/delete/{id}', 'HorarioController@Delete')->name('deleteHorarioAdmin');
Route::post('/admin/horarios', 'HorarioController@Cria')->name('criaHorario');
Route::put('/admin/horarios', 'HorarioController@Altera')->name('alteraHorario');

Route::get('/admin/salas', 'SalaController@IndexAdmin')->name('indexSalaAdmin');
Route::get('/admin/salas/delete/{id}', 'SalaController@Delete')->name('deleteSalaAdmin');
Route::post('/admin/salas', 'SalaController@Cria')->name('criaSala');
Route::put('/admin/salas', 'SalaController@Altera')->name('alteraSala');

Route::get('/admin/sessoes', 'SessaoController@IndexAdmin')->name('indexSessaoAdmin');
Route::post('/admin/sessoes', 'SessaoController@Cria')->name('criaSessao');