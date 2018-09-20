@extends("template.app2");

@section("content")

<div class="container-fluid">
		<div class="row cm-fix-height">
			<div class="col-sm-offset-3 col-sm-6">
		        <div class="panel panel-default">
		            <div class="panel-heading">Serviço: {{ $servico->nome_servico }}</div>
		            <div class="panel-body">
		                <form class="form-horizontal" method="POST" action="{{ url('servico/updateServico/' .$servico->id) }}">
		                	@csrf
		                    <div class="form-group">
		                        <label for="nome" class="col-sm-2 control-label">Nome</label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" id="nome" placeholder="{{ $servico->nome_servico }}" name="nome_servico">
		                        </div>
		                    </div>
		                    <button style="float: right" type="submit" class="btn btn-primary">Salvar</button>
		                </form>
		            </div>
		        </div>
                <a style="float: left;" class="btn btn-danger" href="{{ URL::to('servico/listaServico') }}">Voltar para lista de serviços</a>
	        </div>
		</div>
	</div>

@endsection