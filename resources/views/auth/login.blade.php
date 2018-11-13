<div class="cm-login">

  <div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
    <img img="200px" height="200px" src="img/logo-easyodonto.png">
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3" style="margin:0 auto; float:none;margin-top: 30px">
    @if (count($errors))
      <div class="alert alert-danger alert-dismissible" style="align-self: center" role="alert">
        <strong>Credenciais incorretas ou usuário desativado!
      </div>
    @endif  
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="col-xs-12">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
            <input type="text" name="usuario" class="form-control" placeholder="Nome de usuário">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
            <input type="password" name="password" class="form-control" placeholder="Senha">
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <button type="submit" class="btn btn-block btn-primary">Entrar</button>
      </div>

    </form>
  </div>
</div>
<link href="{{ asset('css/bootstrap-clearmin.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/roboto.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/material-design.css') }}" rel="stylesheet">
<link href="{{ asset('css/small-n-flat.css') }}" rel="stylesheet">
<script src="{{ asset('js/lib/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-3.1.js') }}"></script>
<style>
.cm-login {
  display: flex;
  flex-direction: column;
}

</style>