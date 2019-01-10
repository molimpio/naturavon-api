<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Cadastra os produtos da sincronização do mobile.
     *
     * @param  mixed $produtos: array de itens
     * [ "id" => 1, "codigo" => "508961", "pagina" => 0, "nome" => "BB7 CREAM", "valor" => 0 ]
     * @return array
     */
    public static function salvarProdutosSincronizacao($produtos) : array
    {
        $idsCadastrados = [];

        foreach ($produtos as $prod) {            
            unset($prod['id']);            
            $produtoSalvo = Produto::create($prod);
            array_push($idsCadastrados, $produtoSalvo->id);
        }

        return $idsCadastrados;
    }

    public function index() 
    {
        $produtos = Produto::all();
        return view('produtos', ['produtos' => $produtos]);
    }
}
