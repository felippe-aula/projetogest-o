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
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::get('/teste/{p1}/{p2}','testeController@teste')->name('site.rota1');


/*Route::get('/rota2',function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');
*/
//route::redirect('/rota2','rota1');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});
//route prefix tem como função setar um prefixo as informações presentes no site

route::fallback(function(){
    Echo 'Rota inexistente, Favor se redirecionar para a página principal , <a href="'.route('site.index').'">clicando aqui</a>';
});




/*Route::get(
    '/contato/{nome}/{categoria_id} ',
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - 'Informação'
    ) {
        echo "Seu nome é: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
//Serve para colocarmos uma determinada regra em nosso sistema (nesse caso numeros de 0 a9)
//o primeiro parametro é a variavel que queremos utilizar o segundo é a regra , no caso acima a segunda informação refere-se apenas letras de a-z
*/