@extends("template.app2")

@section("content")
<div>
<div class="container-fluid">
	<div class="row cm-fix-height">
		@if (Session::has('message'))
			<div class="alert alert-info alert-dismissible show" role="alert">
				{{ Session::get('message') }}
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
		@endif
        @if($servicos)
        <div class="panel panel-default">
            <div class="panel-heading">Serviços</div>
            <div class="panel-body">
                <table class="table table-bordered table-hover">
                    <thead>
	                    <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($servicos as $key => $value)
	                        <tr>
	                            <th scope="row">{{$value->id}}</th>
	                            <td>{{$value->nome_servico}}</td>
	                            <td>
	                            	<form method="POST" class="pull-right" action="./delete/{{$value->id}}">
	                            		@csrf
	                            		<button class="btn btn-warning" onclick="return confirm('Tem certeza que deseja deletar o paciente {{$value->nome}}?')">Deletar</button>
	                            	</form>
	                                <!-- <a class="btn btn-small btn-success" href="{{ URL::to('paciente/' . $value->id) }}">Detalhes</a> -->
	                				<a style="float: right;margin-right: 10px" class="btn btn-small btn-info" href=" {{ URL::to('servico/editarServico/' . $value->id) }}">Editar</a>
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
</div>
@endsection