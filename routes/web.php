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


//Para os parametros serem opcional coloque um ? na frente dele
//como o parametro de mensagem 

//Não é reconselhavel deixa como opcional varios parametros

Route::get('contatos/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = "usuario não digitou mensagem nenhuma") 
{
    echo("teste $nome - $categoria - $assunto - $mensagem");
});

//Para tratarmos erros de tipagem do PHP podemos usar expressões regulares

Route::get('contatos/{nome}/{idCategoria}', function(string $nome, int $valor ) 
{
    echo("teste $nome - $valor");
})->where('idCategoria', '[0-9]+')->where('nome', '[A-Za-z]+');//Caso não for numero na variavel idCategoria o Framework Laravel vai idenficiar e vai lancar exceção 404
//Caso não for Letras na variavel nome o Framework Laravel vai idenficiar e vai lancar exceção 404

