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
Auth::routes();

Route::get('/', function () {
    return view('login');
});


Route::get('/clientes', 'ClienteController@index')->name('clientes');
Route::get('/pedidos', 'PedidoController@index')->name('pedidos');
Route::get('/produtos', 'ProdutoController@index')->name('produtos');
Route::get('/vendas', 'VendaController@index')->name('vendas');

Route::get('/gerarRelatorio/{pedidoId}/{dataVencimento}',
            'RelatorioController@gerarRelatorio')->name('gerarRelatorio');
