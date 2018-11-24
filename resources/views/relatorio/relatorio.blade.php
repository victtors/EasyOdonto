@extends('layouts.main')
@section('header')
<nav class="cm-navbar cm-navbar-primary">
    <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
    <div class="cm-flex">
        <h1>Relatórios</h1> 
<!--         <form id="cm-search" action="{{url('funcionario/lista')}}" method="get">
            <input type="search" name="s" autocomplete="off" placeholder="Buscar funcionário por nome ou cpf...">
        </form> -->
    </div>
    <div class="pull-right">
        <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
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
@endsection
@section('content')
    <div style="margin-top: 4%">
        @yield('sub-content')
    </div>
@endsection
