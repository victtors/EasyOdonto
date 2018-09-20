<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
        <link href="{{ asset('assets/css/bootstrap-clearmin.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/roboto.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/material-design.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/small-n-flat.css') }}" rel="stylesheet">

    <title>EASY ODONTO</title>
  </head>
  <body class="cm-no-transition cm-1-navbar">
    <div id="cm-menu">
      <nav class="cm-navbar cm-navbar-primary">
        <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
      </nav>
      <div id="cm-menu-content">
        <div id="cm-menu-items-wrapper">
          <div id="cm-menu-scroller">
            <ul class="cm-menu-items">
              <li class="active"><a href="{{ url('/') }}" class="sf-house">Início</a></li>
              <li class="active"><a href="{{ url('/admin') }}" class=" sf-profile">Cadastrar Funcionário</a></li>
              <li class="active"><a href="{{ url('/servico/cadastrarServico') }}" class="sf-sign-add">Cadastrar Serviços</a></li>
              <li class="active"><a href="{{ url('/servico/listaServico') }}" class="sf-file-text">Ver Serviços</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header id="cm-header">
        <nav class="cm-navbar cm-navbar-primary">
            <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
            <div class="cm-flex"><h1>Administrador</h1></div>
            <div class="pull-right" style="border-left:1px solid #ddd"><div class="btn btn-primary">
              <div href="#" class="active">Sair</div>
            </div>
        </nav>
    </header>

    <div id="global">

      @yield('content')
      <footer class="cm-footer"><span class="pull-right">&copy; EASY ODONTO</span></footer>

    </div>
    
      </div>
      
    </div>
      
    <script src="{{ asset('assets/js/lib/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/clearmin.min.js') }}"></script>
  </body>
</html>
