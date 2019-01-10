<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;

class SincronizacaoController extends Controller
{
    /**
     * Recebe os dados de sincronização do mobile.
     *
     * @param  mixed $request: dados do mobile conforme arquivo storage/data.json
     * 
     *
     * @return void
     */
    public function sincronizar(Request $request) {
        try {
            $dados = $request->all();
            $clientes = $dados['clientes'];
            $clientesIds = ClienteController::salvarClientesSincronizacao($clientes);

            $pedidos = $dados['pedidos'];
            $pedidosIds = PedidoController::salvarPedidosSincronizacao($pedidos);
            
            $produtos = $dados['produtos'];
            $produtosIds = ProdutoController::salvarProdutosSincronizacao($produtos);
            
            $vendas = $dados['vendas'];
            $vendasIds = VendaController::salvarVendasSincronizacao($vendas);            

            $response = new \stdClass;
            $response->clientesIds = $clientesIds;
            $response->pedidosIds = $pedidosIds;
            $response->produtosIds = $produtosIds;
            $response->vendasIds = $vendasIds;
            
            return response()->json(['data' => $response]);
        } catch(\Exception $ex) {
            return response()->json(['message' => 'Erro ao sincronizar dados']);
        }        
    }
}
