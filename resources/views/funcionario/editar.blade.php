@extends('funcionario.funcionario')
@section('sub-content')
    <div class="container-fluid" ng-controller="funcionarioCadastroController">
        <div class="row cm-fix-height">
            @if (Session::has('message'))
                <div class="alert alert-danger alert-dismissible show" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Funcionario {{$funcionario->nome}}</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="./{{$funcionario->id}}">
                            @csrf
                            <div class="form-group">
                                <label for="nome" class="col-sm-1 control-label">Nome: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Nome do paciente" name="nome" value="{{$funcionario->nome}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usuario" class="col-sm-1 control-label">Login: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Login do funcionário" name="usuario" value="{{$funcionario->usuario}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cpf" class="col-sm-1 control-label">CPF: </label>
                                <div class="col-sm-10" ng-init="vm.cpf = '{{$funcionario->cpf}}'">
                                    <input type="text" class="form-control" placeholder="CPF do funcionário" name="cpf" mask="999.999.999-99" ng-model="vm.cpf" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tipo" class="col-sm-1 control-label">
                                    Tipo:
                                </label>
                                <div class="col-sm-10">
                                    <select id="tipo" class="form-control" name="tipo">
                                        @if($funcionario->tipo == 'A')
                                        <option value="1" selected ng-init="tipo = '1'">Atendente</option>
                                        <option value="2">Dentista</option>
                                        <option value="3">Administrador</option>
                                        @elseif($funcionario->tipo == 'D')
                                        <option value="1">Atendente</option>
                                        <option value="2" ng-init="tipo = '2'" selected>Dentista</option>
                                        <option value="3">Administrador</option>
                                        @else
                                        <option value="1">Atendente</option>
                                        <option value="2">Dentista</option>
                                        <option value="3" ng-init="tipo = '3'" selected>Administrador</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div ng-show="tipo == '2'" class="form-group">
                                <label for="cargo" class="col-sm-1 control-label" style="padding-left: 0px">Especialidade: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Cargo" name="cargo" value="{{$funcionario->cargo}}">
                                </div>
                            </div>

                            <div ng-show="tipo == '2'" class="form-group">
                                <label for="cro" class="col-sm-1 control-label">CRO: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="CRO" name="cro" value="{{$funcionario->cro}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf" class="col-sm-1 control-label">Senha: </label>
                                <div id="input-password" class="col-sm-10">
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <button type="button" id="btn-show-input-password" class="btn btn-warning">
                                    Mudar senha
                                </button>
                            </div>
                            <div class="form-group">
                                <div id="input-confirm-password">
                                    <label for="confirm_password" class="col-sm-1 control-label">Confirmar Senha: </label>
                                    <div class="col-sm-10"><input type="password" class="form-control" name="password_confirmation"></div>
                                </div>
                            </div>
                            <button style="float: right" type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
                <a style="float: left;" class="btn btn-danger" href="{{ URL::to('funcionario/lista') }}">Voltar para lista</a>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
<script type="text/javascript">
$(function(){

    $("#input-password").hide();
    $("#input-confirm-password").hide();

    $("#btn-show-input-password").click(() => {
        $("#input-password").show("slow");
        $("#btn-show-input-password").hide("slow");
        $("#input-confirm-password").show();
    })

}); 
</script>