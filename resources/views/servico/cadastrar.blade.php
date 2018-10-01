@extends("servico.servico")
@section("sub-content")
<div class="container-fluid">
	<div class="row cm-fix-height">
		<div class="col-sm-offset-3 col-sm-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">Cadastrar um novo serviço</div>
	            <div class="panel-body">
	                <form class="form-horizontal" method="POST" action="{{ url('servicos') }}">
                    {{ csrf_field() }}
	                    <div class="form-group">
	                        <label for="nome_servico" class="col-sm-2 control-label">Serviço: </label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control" id="nome_servico" placeholder="'Ex: Restauração'" name="nome">
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