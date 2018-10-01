@extends('funcionario.funcionario')
@section('sub-content')
    <div class="container-fluid">
        <div class="row cm-fix-height">
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
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="CPF do funcionário" name="cpf" value="{{$funcionario->cpf}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tipo" class="col-sm-1 control-label">Tipo: </label>
                                <div class="col-sm-10">
                                    <select id="tipo" class="form-control" name="tipo">
                                        <option value="1" {{$funcionario->tipo == 'A'? 'selected': ''}}>Atendente</option>
                                        <option value="2" {{$funcionario->tipo == 'D'? 'selected': ''}}>Dentista</option>
                                        <option value="3" {{$funcionario->tipo == 'ADM'? 'selected': ''}}>Administrador</option>
                                    </select>
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