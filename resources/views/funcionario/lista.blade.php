@extends("funcionario.funcionario")
@section("sub-content")
<div class="container-fluid" ng-controller="funcionarioListaController">
	<div class="row cm-fix-height">
		@if (Session::has('message'))
			<div class="alert alert-info alert-dismissible show" role="alert">
				{{ Session::get('message') }}
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
		@endif
        @if(count($funcionarios) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">Funcionarios</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
	                    <tr>
                            
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Tipo</th>
							<th>Usuário</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($funcionarios as $key => $value)
	                        <tr>
	                            <td>{{$value->nome}}</td>
	                            <td ng-bind-html="'{{$value->cpf}}' | cpf"></td>
	                            @if($value->tipo == 'ADM')
	                            	<td>Administrador</td>
	                            @else
	                            	<td>{{$value->tipo == 'A' ? 'Atendente' : 'Dentista'}}</td>
	                            @endif
								<td>{{$value->usuario}}</td>
	                            <td>
	                            	<form method="POST" class="pull-right" action="./delete/{{$value->id}}">
	                            		@csrf
	                            		@if($value->ativo == 1)
	                            			<button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja desativar o funcionário: {{$value->nome}}?')">Desativar</button>
	                            		@else
	                            			<button class="btn btn-success" onclick="return confirm('Tem certeza que deseja reativar o funcionário: {{$value->nome}}?')">Reativar</button>
	                            		@endif
	                            	</form>
	                                <!-- <a class="btn btn-small btn-success" href="{{ URL::to('paciente/' . $value->id) }}">Detalhes</a> -->
	                				<a style="float: right;margin-right: 10px" class="btn btn-small btn-info" href=" {{ URL::to('funcionario/edit/' . $value->id) }}">Editar</a>
	                        	</td>
	                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <nav>
        </nav>
        @else
            <h2>Nenhum serviço cadastrado na base de dados!</h2>
        @endif
	</div>
</div>
@endsection