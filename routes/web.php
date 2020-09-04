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

//inicio dos testes

//get
Route::get('/contato', function() {
    return view('teste.contato');
});

// Route::view('/view', 'welcome');

//post
Route::post('/registro', function(){
    return '';
});

//any
Route::any('/any', function(){
    return 'any';
});

//match
Route::match(['post, put'], '/match', function(){
    return 'match';
});

//teste com variaveis, trazendo pelo get
Route::get('/categorias/{flag}', function ($id) {
    return "Produtos da categoria: {$id}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/balas/{idBala?}', function($idBala = ''){
    return "Bala(s) {$idBala}";
});

//redirecionamento

// Route::get('/redirect', function() {
//     return redirect('/registro');
// });

//redirecionamento de forma mais simplificada
Route::redirect('/redirect', '/registro');

//teste com nomes (dinamico) e redirecionar
Route::get('/name-url', function(){
    return 'elian';
})-> name('url.name');

Route::get('redirect2', function(){
    return redirect()->route('url.name');
});

//grupo de rotas com middleware de autenticacao
    //rota de login para a autenticacao
Route::get('/login', function(){
    return "login";
})->name('login');

    //sem prefixo
// Route::middleware('auth')->group(function(){
//     Route::get('/admin/dashboard', function (){
//         return 'home admin';
//     });

//     Route::get('/admin/financeiro', function (){
//         return 'financeiro admin';
//     });
// });

    //grupo de rotas com prefixo (deixa mais dinamico e facil a manutencao)
        //pode utilizar string ou array para os negocio dentro do middleware
        //utilizando controller para teste utilizando namespace (pasta)

// Route::middleware(['auth'])->group(function(){    

//     Route::prefix('admin')->group(function(){

//         Route::get('/dashboard', 'Admin\TesteController@dashboard');
    
//         Route::get('/financeiro', 'Admin\TesteController@financeiro');

//         Route::get('/', 'Admin\TesteController@teste');
//     });
   
// });

    //grupo de rotas com prefixo e namespace e grupo de nomes

Route::middleware([])->group(function(){    

    Route::prefix('admin')->group(function(){
        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){

                Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');
    
                Route::get('/financeiro', 'TesteController@financeiro')->name('financeiro');

                //Route::get('/', 'TesteController@teste');
                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            });
            
        });
        
    });
    
});

//utilizar no cmd a seguinte linha de commando:
//php artisan make:controller NomeAqui
//caso queira criar dentro de uma pasta do controller
//php artisan make:controller Pasta/NomeAqui

    //utilizando middleware em uma unica rota
// Route::get('/admin/dashboard', function (){
//     return 'home admin';
// })->middleware('auth');

//Inicializando o módulo de CONTROLLERS

Route::get('/financeiro', 'FinanceiroController@index')->name('financeiro.index');

/*
//Controllers com parametros de rotas
    //READ//Por padrao, quando queremos mostrar algo em POO, utiliza o nome show
Route::get('/financeiro/{id}', 'FinanceiroController@show')->name('financeiro.show');
    //utilizando CRUD
    //EDIT Editar um produto (fingir ser um exemplo de produto)
Route::put('/financeiro/{id}', 'FinanceiroController@update')->name('financeiro.update');
 
    //Create
Route::get('/financeiro/create', 'FinanceiroController@create')->name('financeiro.create');

Route::post('financeiro', 'FinanceiroController@store')->name('financeiro.store');

    //deletar (DELETE)
Route::delete('/financeiro/{id}', 'FinanceiroController@destroy')->name('financeiro.destroy');
*/

//Controllers Resources
//Basicamente, posso utilizar para substituir todas as linhas de controllers acima.

/*Route::resource('financeiro', 'FinanceiroController');*/

  //Utilizando Resource
Route::resource('financeiro2', 'Financeiro2Controller');

/*Caso queira criar o CRUD com Resources, é bem mais
rápido, utilizar a linha de comando:
php artisan make:controller nomeController --resource
*/
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
