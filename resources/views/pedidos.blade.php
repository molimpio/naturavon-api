@extends('dashboard')

@section('wrapper')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Pedidos</h1>
        <table class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Campanha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->data }}</td>
                        <td>{{ $p->campanha }}</td>
                        <td>
                            <button class="btn btn-primary" onclick="dataPagamento({{ $p->id }}, {{ env('URL_RELATORIO') }})">Relatório</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{ asset(env('PATH_ASSETS').'js/pedidos.js') }} "></script>
@endsection