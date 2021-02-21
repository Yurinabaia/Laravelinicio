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
//Para iniciar o servidor use o codigo
//php artisan serve --port=8080

/*
Route::get('/', function () {
    return "Olá seja bem vindo ao curso";
});
*/

Route::get('/', 'PrincipalController@principal');//O Laravel identifica isso como um controller
//Para criar um controller use o codigo
//O @ significa o nome da Action que vamos executar dentro do controller
//codigo para o controller: php artisan make:controller PrincipalController 
Route::get('/sobrenos', 'SobreNosController@sobrenos');
Route::get('/contatos', 'ContatosController@contatos');
Route::get('/login', function() { return "login";});


//Para testa saber as rotas configuradas usar o php artisan route:list

//Definido rotas sigilosas, onde o usuario precisa se autentica para entra na rota
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function() {return "clientes";});
    Route::get('/fornecedores', function() {return "fornecedores";});
    Route::get('/produtos', function() {return ("produtos");});
});

