<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use Fpdf;

class RelatorioController extends Controller
{
    public function gerarRelatorio($pedidoId, $dataVencimento) 
    {
        $clientesPedidoID = Venda::getClientesIdsByPedidoID($pedidoId);
        
        $pdf = new Fpdf();
        $pdf::AddPage();        
        
        $qtdeLinhasPorPagina = 26;
        $currentLinhas = 0;     
        $qtdeLinhasCliente = 0; 
        $qtdeLinhasRestantes = 0; 

        foreach ($clientesPedidoID as $cliente) {            
            $vendas = Venda::getVendasByPedidoIDClienteID($pedidoId, $cliente->cliente_id); 
            
            $totalCliente = 0.0;
            foreach ($vendas as $key => $venda) {

                if ($key == 0 && $currentLinhas > 0) {
                    // 26 linhas por pagina
                    // se a qtde linhas restante > qtde linhas necessárias para um cliente
                    // qtde linhas necessárias para um cliente = qtde produtos + 3
                    $qtdeLinhasCliente = count($vendas) + 3;
                    $qtdeLinhasRestantes = $qtdeLinhasPorPagina - $currentLinhas;

                    if ($qtdeLinhasRestantes < $qtdeLinhasCliente) {
                        $pdf::AddPage();    
                        $currentLinhas = 0;     
                    }
                }

                if ($key == 0) {
                    $pdf::SetFont('Arial','B',16);
                    $pdf::Cell(100,10, 'Cliente: ' . $venda->cliente, 0);                                        
                    $pdf::Cell(90,10, 'Vencimento: ' . $dataVencimento, 0,'', 'R');
                    $pdf::Ln(10);
                    $currentLinhas++;
                    $pdf::Cell(30,10, 'Código', 1);
                    $pdf::Cell(60,10, 'Produto', 1);
                    $pdf::Cell(20,10, 'Pág.', 1);
                    $pdf::Cell(20,10, 'Qtde', 1);
                    $pdf::Cell(30,10, 'Valor', 1);
                    $pdf::Cell(30,10, 'Total', 1);
                    $pdf::Ln(10);
                    $currentLinhas++;
                }
                
                $pdf::SetFont('Arial','',13);
                $pdf::Cell(30,10, $venda->codigo, 1);

                $produto = $venda->produto;
                if(strlen($produto) > 15) {
                    $produto = substr($produto, 0, 15);
                }

                $pdf::Cell(60,10, $produto, 1);
                $pdf::Cell(20,10, $venda->pagina, 1);
                $pdf::Cell(20,10, $venda->qtde, 1);
                $pdf::Cell(30,10, $venda->valor, 1);
                $pdf::Cell(30,10, $venda->total, 1);
                $totalCliente += $venda->total;
                $pdf::Ln(10);   
                $currentLinhas++;
            }            
            $totalString = 'R$ '.$totalCliente;
            $pdf::SetFont('Arial','B',16);
            $pdf::Cell(190,10, $totalString, 0, '', 'R');
            $pdf::Ln(20);
            $currentLinhas++;
            $currentLinhas++;
        }

        $pdf::Output();
        exit;
    }
}
