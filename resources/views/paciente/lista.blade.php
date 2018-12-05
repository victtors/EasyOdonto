@extends('paciente.paciente')
@section('sub-content')
<script type="text/javascript">

        function gerarAtestado(elm){
            const num_dia = prompt("Digite a quantidade de dias do atestado");
            const url = elm.id + '?dias=' + num_dia;
            if(num_dia)
                window.open(url, '_blank');
        }

</script>
<div class="container-fluid" ng-controller="pacienteListaController">
	<div class="row cm-fix-height">
		@if (Session::has('message'))
			<div class="alert alert-info alert-dismissible show" role="alert">
				{{ Session::get('message') }}
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
		@endif
        @if(count($pacientes) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">Pacientes</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
	                    <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($pacientes as $key => $value)
	                        <tr>
	                            <td>{{$value->nome}}</td>
	                            <td ng-bind-html="'{{$value->cpf}}' | cpf"></td>
	                            <td>
                                    @if(Auth::user()->tipo == 'ADM' or Auth::user()->tipo == 'A')
    	                            	<form method="POST" class="pull-right" action="./delete/{{$value->id}}">
    	                            		@csrf
    	                            		<button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar o paciente {{$value->nome}}?')">Deletar</button>
    	                            	</form>
    	                                <!-- <a class="btn btn-small btn-success" href="{{ URL::to('paciente/' . $value->id) }}">Detalhes</a> -->
                                        <a style="float: right;margin-right: 10px" class="btn btn-small btn-info" href="{{ URL::to('paciente/edit/' . $value->id) }}">Editar</a>
                                    @endif
                                    @if(Auth::user()->tipo == 'D')
                                        <a style="float: right;margin-right: 10px" class="btn btn-small btn-info" href="{{ URL::to('paciente/edit/' . $value->id) }}">Visualizar</a>
                                        <a id="{{ URL::to('paciente/atestado/' . $value->id) }}" style="float: right;margin-right: 10px" class="btn btn-small btn-warning" onclick="gerarAtestado(this)">Gerar Atestado</a>
                                    @endif
	                				<a href="{{ URL::to('paciente/prontuario/' . $value->id) }}" style="float: right;margin-right: 10px" class="btn btn-small btn-primary">Prontuário</a>
	                        	</td>
	                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <nav>
            <ul class="pagination shadowed" style="margin:0">
                <li>
                    <a href="#">
                        <span><i class="fa fa-angle-left"></i></span>
                    </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#">
                        <span><i class="fa fa-angle-right"></i></span>
                    </a>
                </li>
            </ul>
        </nav>
        @else
            <h2>Nenhum paciente cadastrado na base de dados!</h2>
        @endif
	</div>
</div>
@endsection