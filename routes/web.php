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


//O name signinica criar uma nomeclatura para as rotas, isso quer dizer que dentro do laravel vamos usar esse name para definir a rota
Route::get('/', 'PrincipalController@principal')->name('site.index');//O Laravel identifica isso como um controller
//Para criar um controller use o codigo
//O @ significa o nome da Action que vamos executar dentro do controller
//codigo para o controller: php artisan make:controller PrincipalController 
Route::get('/sobrenos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contatos', 'ContatosController@contatos')->name('site.contatos');
Route::get('/login', function() { return "login";})->name('site.login');


//Para testa saber as rotas configuradas usar o php artisan route:list

//Definido rotas sigilosas, onde o usuario precisa se autentica para entra na rota
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function() {return "clientes";})->name('app.clientes');//apelido da rota, 
    Route::get('/fornecedores', function() {return "fornecedores";})->name('app.fornecedores');
    Route::get('/produtos', function() {return ("produtos");})->name('app.produtos');
});


//Criando um redirecionamento de rotas
Route::get("/rota1", function() 
{
    echo("Rota 1");
})->name('site.rota1');


Route::get("/rota2", function() 
{
    return redirect()->route('site.rota1');//Redirecionado as rotas atraves do route
    //neste caso podemos usar ele também nos controller
    //apenas copiar esse return redirect()->route('nomeRotaDestino'); e cole no Controller 
})->name('site.rota2');


//Route::redirect('/rota2','/rota1');//Fazendo um redirecionamento de rotas, da rota2 para rota1
//Esse Route::redirect é um rediecionamento atraves da rota


//Caso o usuario vai para uma pagina 404 que não existe ele manda para outra pagina customizada
Route::fallback(function () 
{
    echo 'A rota acessada não existe. <a href="'.route('site.index').'"> clique aqui para pagina inicial </a'; 
    //é possivel definier essa pagina em um controller
    //apenas passar o nome do controller inves da funcion
});
