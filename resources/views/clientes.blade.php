@extends('dashboard')

@section('wrapper')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Clientes</h1>
        <table class="table table-striped table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Referencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->nome }}</td>
                        <td>{{ $c->referencia }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection