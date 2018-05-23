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

Route::get('/', 'SessaoController@IndexDestaque')->name('home');

Route::get('/login', function () {
    return view('login');
})->name('getLogin');

Route::get('/logout', 'UsuarioController@Logout')->name('logout');

Route::post('/login', 'UsuarioController@Autentica')->name('postLogin');

Route::post('/cadastro', 'UsuarioController@Cria')->name('criaUsuario');

Route::get('/admin/filmes', 'FilmeController@IndexAdmin')->name('indexFilmeAdmin');
Route::get('/admin/filmes/novo', 'FilmeController@Novo')->name('novoFilmeAdmin');
Route::get('/admin/filmes/edita/{id}', 'FilmeController@Edita')->name('editaFilmeAdmin');
Route::get('/admin/filmes/deleta/{id}', 'FilmeController@Deleta')->name('deletaFilmeAdmin');
Route::get('/filmes/{id}', 'FilmeController@Detalhes')->name('detalheFilme');
Route::post('/admin/filmes', 'FilmeController@Cria')->name('criaFilme');
Route::post('/admin/filmes/procura', 'FilmeController@Filtro')->name('procuraFilmeAdmin');
Route::put('/admin/filmes/edita/', 'FilmeController@Altera')->name('alteraFilmeAdmin');

Route::get('/admin/horarios', 'HorarioController@IndexAdmin')->name('indexHorarioAdmin');
Route::get('/admin/horarios/delete/{id}', 'HorarioController@Delete')->name('deleteHorarioAdmin');
Route::post('/admin/horarios', 'HorarioController@Cria')->name('criaHorario');
Route::put('/admin/horarios', 'HorarioController@Altera')->name('alteraHorario');

Route::get('/admin/salas', 'SalaController@IndexAdmin')->name('indexSalaAdmin');
Route::get('/admin/salas/delete/{id}', 'SalaController@Delete')->name('deleteSalaAdmin');
Route::post('/admin/salas', 'SalaController@Cria')->name('criaSala');
Route::put('/admin/salas', 'SalaController@Altera')->name('alteraSala');

Route::get('/admin/sessoes/novo', 'SessaoController@Novo')->name('novaSessaoAdmin');
Route::get('sessoes', 'SessaoController@Index')->name('indexSessao');
Route::post('/admin/sessoes/novo', 'SessaoController@Cria')->name('criaSessaoAdmin');