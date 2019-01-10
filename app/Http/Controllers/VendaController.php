<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;

class VendaController extends Controller
{
    /**
     * Cadastra as vendas da sincronização do mobile.
     *
     * @param  mixed $vendas: array de itens
     * [ "id" => 1, "codigo" => "12", "pagina" => 3, "produto" => "CREME",
     *   "quantidade" => 1, "valor" => 3.99, "total" => 3.99,
     *   "clienteId" => 1, "pedidoId" => 1 ]
     *
     * @return array: array com os ids cadastrados
     * [1, 2, 3, 4, 5]
     */
    public static function salvarVendasSincronizacao($vendas) : array
    {
        $idsCadastrados = [];

        foreach ($vendas as $ven) {            
            unset($ven['id']);                        
            $vendaSalva = Venda::create($ven);
            array_push($idsCadastrados, $vendaSalva->id);
        }

        return $idsCadastrados;
    }

    public function index() 
    {
        $vendas = Venda::getVendas();
        return view('vendas', ['vendas' => $vendas]);
    }
}
