<div class="cm-login">

  <div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
    
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
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