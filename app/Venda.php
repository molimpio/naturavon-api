<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Venda extends Model
{
    protected $table = 'vendas';
    protected $fillable = [ 'codigo', 'pagina', 'produto', 'qtde',
        'valor', 'total', 'cliente_id', 'pedido_id' ];

    public static function getVendas() 
    {
        return DB::table('vendas AS v')
                ->select('v.*', 'c.nome AS cliente', 'p.campanha AS campanha')
                ->join('clientes AS c', 'c.id', 'v.cliente_id')
                ->join('pedidos AS p', 'p.id', 'v.pedido_id')
                ->orderBy('id', 'asc')
                ->get();        
    }    

    public static function getClientesIdsByPedidoID($pedidoId) 
    {        
        return DB::table('vendas')
                ->select('cliente_id')
                ->where('pedido_id', $pedidoId)
                ->groupBy('cliente_id')
                ->orderBy('cliente_id', 'asc')
                ->get();        
    }

    public static function getVendasByPedidoIDClienteID($pedidoId, $clienteId) 
    {
        return DB::table('vendas AS v')
                ->select('v.*', 'c.nome AS cliente', 'p.campanha AS campanha')
                ->join('clientes AS c', 'c.id', 'v.cliente_id')
                ->join('pedidos AS p', 'p.id', 'v.pedido_id')
                ->where('v.pedido_id', $pedidoId)
                ->where('v.cliente_id', $clienteId)
                ->get();        
    }    
}
