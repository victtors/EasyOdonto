@extends('layouts.main')
@section('header')
<nav class="cm-navbar cm-navbar-primary">
    <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
    <div class="cm-flex">
        <h1>Funcionários</h1>
        <form id="cm-search" action="{{url('funcionario/lista')}}" method="get">
            <input type="search" name="s" autocomplete="off" placeholder="Buscar funcionário por nome ou cpf...">
        </form>
    </div>
    <div class="pull-right">
        <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
    </div>
    <div class="dropdown pull-right">
        <div class="popover cm-popover bottom">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading text-overflow">
                            <i class="fa fa-fw fa-envelope"></i> Nunc volutpat aliquet magna.
                        </h4>
                        <p class="list-group-item-text text-overflow">Pellentesque tincidunt mollis scelerisque. Praesent vel blandit quam.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-fw fa-envelope"></i> Aliquam orci lectus
                        </h4>
                        <p class="list-group-item-text">Donec quis arcu non risus sagittis</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            <i class="fa fa-fw fa-warning"></i> Holy guacamole !
                        </h4>
                        <p class="list-group-item-text">Best check yo self, you're not looking too good.</p>
                    </a>
                </div>
                <div style="padding:10px"><a class="btn btn-success btn-block" href="#">Show me more...</a></div>
            </div>
        </div>
    </div>
    <div class="dropdown pull-right">
        <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
        <ul class="dropdown-menu">
            <li class="disabled text-center">
                <a style="cursor:default;"><strong>{{ Auth::user()->nome }}</strong></a>
            </li>
            <li class="divider"></li>
<!--             <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
            </li> -->
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-sign-out"></i> Sair</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</nav>
<nav class="cm-navbar cm-navbar-default cm-navbar-slideup">
    <div class="cm-flex">
        <div class="nav-tabs-container">
            <ul class="nav nav-tabs">
                <li class="@active('funcionario/lista/?.*')"><a href="{{ url('/funcionario/lista') }}">Lista Funcionários</a></li>
                <li class="@active('funcionario/cadastrar/?.*')"><a href="{{ url('/funcionario/cadastrar') }}">Cadastrar Funcionário</a></li>
            </ul>
        </div>
    </div>
</nav>
<script type="text/javascript" src="{{url('js/angular.min.js')}}"></script>
<script src="{{url('js/angular-sanitize.js')}}"></script>
<script type="text/javascript" src="{{url('js/ngMask.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/funcionario.js')}}"></script>
<script type="text/javascript" src="{{url('js/ng-filters-br.min.js')}}"></script>
@endsection
@section('content')
    <div style="margin-top: 4%" ng-app="funcionario">
        @yield('sub-content')
    </div>
@endsection
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>