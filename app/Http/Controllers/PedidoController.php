<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{
    /**
     * Cadastra os pedidos da sincronização do mobile.
     *
     * @param  mixed $pedidos: array de itens
     * [ "id" => 1, "data" => "2018-12-31 11:17", "campanha" => "CAMPANHA 17" ]
     * 
     * @return array: array com os ids cadastrados
     * [1, 2, 3, 4, 5]
     */
    public static function salvarPedidosSincronizacao($pedidos) : array
    {
        $idsCadastrados = [];

        foreach ($pedidos as $ped) {
            unset($ped['id']);            
            $pedidoSalvo = Pedido::create($ped);
            array_push($idsCadastrados, $pedidoSalvo->id);
        }

        return $idsCadastrados;
    }

    public function index() 
    {
        $pedidos = Pedido::all();
        return view('pedidos', ['pedidos' => $pedidos]);
    }
}
