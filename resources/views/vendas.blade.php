@extends('dashboard')

@section('wrapper')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Vendas</h1>
        <table class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Página</th>
                    <th>Produto</th>
                    <th>Qtde</th>
                    <th>Valor</th>
                    <th>Total</th>
                    <th>Cliente</th>
                    <th>Pedido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendas as $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->codigo }}</td>
                        <td>{{ $v->pagina }}</td>
                        <td>{{ $v->produto }}</td>
                        <td>{{ $v->qtde }}</td>
                        <td>{{ $v->valor }}</td>
                        <td>{{ $v->total }}</td>
                        <td>{{ $v->cliente }}</td>
                        <td>{{ $v->campanha }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection