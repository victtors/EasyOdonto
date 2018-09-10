@extends('paciente.paciente')
@section('sub-content')
	<div class="container-fluid">
		<div class="row cm-fix-height">
			<div class="col-sm-offset-3 col-sm-6">
		        <div class="panel panel-default">
		            <div class="panel-heading">Cadastrar Paciente</div>
		            <div class="panel-body">
		                <form class="form-horizontal" method="POST" action="{{ route('pacientes') }}">
		                	@csrf
		                    <div class="form-group">
		                        <label for="nome" class="col-sm-2 control-label">Nome</label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" id="nome" placeholder="Nome do paciente" name="nome">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label for="cpf" class="col-sm-2 control-label">CPF</label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" id="cpf" placeholder="CPF do paciente" name="cpf">
		                        </div>
		                    </div>
		                    <button style="float: right" type="submit" class="btn btn-primary">Salvar</button>
		                </form>
		            </div>
		        </div>
	        </div>
		</div>
	</div>
@endsection