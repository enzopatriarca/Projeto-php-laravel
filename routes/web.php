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

Route::get('/', 'PrincipalController@index')->name('site.index');


Route::get('/sobre-nos', 'SobreController@index')->name('site.sobrenos');


Route::get('/contatos', 'ContatosController@index')->name('site.contatos');
Route::post('/contatos_send', 'ContatosController@contato')->name('site.contatosPost');

Route::get('/login', function(){
    return "login";
})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return "clientes";})->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');

    Route::get('/produtos', function(){ return "produtos"; });
});

Route::get('/rota1',function(){echo 'rota1';})->name('rota1');
Route::get('/rota2',function(){
    return redirect()->route('rota1');
})->name('rota2');

Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('rota1');

Route::fallback(function(){
    echo "Rota acessada nao existe";
});




// Route::get('/contato/{nome}/{categoriaid}', function(string $nome,int $categoria){
//     echo 'Nome: '.$nome;
//     echo ' Categoria: '.$categoria;
// })->where('categoriaid','[0-9]+')->where('nome','[A-Za-z]+');


