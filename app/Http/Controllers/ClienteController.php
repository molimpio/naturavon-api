<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{    
    /**
     * Cadastra os clientes da sincronização do mobile.
     *
     * @param  mixed $clientes: array de itens
     * ["id" => 1, "nome" => "JOAO", "referencia" => "EMPRESA", "telefone" => null ] 
     *
     * @return array: array com os ids cadastrados
     * [1, 2, 3, 4, 5]
     */
    public static function salvarClientesSincronizacao($clientes) : array 
    {
        $idsCadastrados = [];

        foreach ($clientes as $cli) {
            unset($cli['id']);            
            $clienteSalvo = Cliente::create($cli);
            array_push($idsCadastrados, $clienteSalvo->id);
        }

        return $idsCadastrados;
    }

    public function index() 
    {
        $clientes = Cliente::all();
        return view('clientes', ['clientes' => $clientes]);
    }
}
