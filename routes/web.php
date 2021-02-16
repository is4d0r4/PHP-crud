<!-- ROTAS -->

<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/contato','UserController@listUser');
// aleatório
Route::get('inserir_contato','UserController@redireciona');
// novo contato para tela de cadastro
Route::get('agenda', ['as'=>'agenda.aparecer', 'uses' => 'UserController@aparecer']);
// de inicio para tabela
Route::get('welcome','UserController@voltar');
// de inserir para tela inicio
Route::get('welcome', 'UserController@tabelaparainicio'); 
// da tabela para o inicio
Route::post('inserir_contato2','UserController@insert');
// enviar depois de preenchidos 
Route::get('dadosdobanco', ['as'=> 'dadosdobanco.view', 'uses' =>'UserController@view']);
// voltar dados do banco na tela agenda
Route::get('agendadeletar/{id}','UserController@delete');
// rota para excluir
Route::get('editar/{id}','UserController@editar');
// repetir os nomes no formulário
Route::put('atualizar/{id}', 'UserController@update');
//atualizar os nomes 
