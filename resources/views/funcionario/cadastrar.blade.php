@extends('funcionario.funcionario')
@section('sub-content')
<div class="container-fluid" ng-controller="funcionarioCadastroController">
    <div class="row cm-fix-height">
        <div class="col-sm-offset-2 col-sm-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar um novo funcionário</div>
                <div class="panel-body">
                    <form method="POST" role="form" action="{{ url('users/registro') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf"  mask="999.999.999-99" ng-model="vm.cpf">
                            </div>
                        </div>

                        <div class="form-group row" ng-init="tipo = '1'">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <select id="tipo" class="form-control" name="tipo" ng-model="tipo">
                                    <option value="1">Atendente</option>
                                    <option value="2">Dentista</option>
                                    <option value="3">Administrador</option>
                                </select>
                            </div>
                        </div>

                        <div ng-show="tipo == '2'" class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Especialidade') }}</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control" name="cargo">
                            </div>
                        </div>

                        <div ng-show="tipo == '2'" class="form-group row">
                            <label for="cro" class="col-md-4 col-form-label text-md-right">{{ __('CRO') }}</label>

                            <div class="col-md-6">
                                <input id="cro" type="text" class="form-control" name="cro">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" name="password" type="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm_password" class="col-md-4 col-form-label text-md-right">{{ __('Confirmação de Senha') }}</label>

                            <div class="col-md-6">
                                <input id="confirm_password" name="password_confirmation" type="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-offset-10 col-md-2">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    {{ __('Salvar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection