@extends('dashboard')

@section('wrapper')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Produtos</h1>
        <table class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Página</th>
                    <th>Nome</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->codigo }}</td>
                        <td>{{ $p->pagina }}</td>
                        <td>{{ $p->nome }}</td>
                        <td>{{ $p->valor }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection