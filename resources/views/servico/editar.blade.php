@extends('servico.servico')
@section('sub-content')
	<div class="container-fluid">
		<div class="row cm-fix-height">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-heading">Serviço {{$servico->nome}}</div>
		            <div class="panel-body">
		                <form class="form-horizontal" method="POST" action="./{{$servico->id}}">
		                	@csrf
		                	<div class="form-group">
		                        <label for="nome" class="col-sm-1 control-label">Nome: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Nome do paciente" name="nome" value="{{$servico->nome}}">
		                        </div>
		                    </div>
		                    <button style="float: right" type="submit" class="btn btn-primary">Salvar</button>
		                </form>
		            </div>
		        </div>
                <a style="float: left;" class="btn btn-danger" href="{{ URL::to('servico/lista') }}">Voltar para lista</a>
	        </div>
		</div>
	</div>
@endsection