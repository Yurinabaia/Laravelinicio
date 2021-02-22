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

Route::get('/', "PaginaPrincipalController@index")->name("index");
Route::get('/about', "AboutController@about")->name("about");
Route::get('/contatos', "ContatosController@contatos")->name("contatos");
Route::get('/login', "LoginController@login")->name("login");

Route::prefix('/app')->group(function() 
{
    Route::get('/clientes', function() {return "Clitens";})->name("clientes");
    Route::get('/fornecedores', function() {return "fornecedores";})->name("fonecedores");
    Route::get('/produtos', function() {return "produtos";})->name("produtos");
});

/*
Route::get('/rota1', function() {return "Rota 1";})->name('rota1');
Route::get('/rota2', function() {
    return redirect()->route('rota1');//Redirecionado as rotas atraves do route
});
*/
//Route::redirect('rota2', 'rota1');


Route::fallback(function() 
{
    echo("A rota informada não existe no sistema");
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name(('teste'));


/*
Route::get('/rota3/{name}/{idCategoria?}', function(string $name, int $idCategoria = 2) 
{
    echo("Nome  $name  - ID: $idCategoria ");
})->where('idCategoria', '[0-9]+')->where('name', '[A-Za-z]+');

*/
