@extends('layouts.app')

@section('content')
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Naturavon</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">                    
                    <li><a href="{{ env('URL_BASE') }}/clientes"> Clientes</a></li>                    
                    <li><a href="{{ env('URL_BASE') }}/pedidos"> Pedidos</a></li>
                    <li><a href="{{ env('URL_BASE') }}/produtos"> Produtos</a></li>
                    <li><a href="{{ env('URL_BASE') }}/vendas"> Vendas</a></li>                    
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('wrapper')           
        </div>
    </div>

</div>
@endsection
