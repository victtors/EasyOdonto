@extends("relatorio.relatorio")
@section("sub-content")
<div class="container-fluid">
	<div class="row cm-fix-height">
		<div class="col col-md-6">
			<div class="panel panel-default">
	            <div class="panel-heading">Mensal</div>
	            <div class="panel-body">
	            	<div class="row">
	            		<div class="col col-md-10">
	            			<h1>Consultas Marcadas: </h1>
	            		</div>
	            		<div class="col col-md-2">
	            			<h2>{{count($data['mensal'])}}</h2>
	            		</div>
	            	</div>
	            </div>
	        </div>
		</div>
		<div class="col col-md-6">
			<div class="panel panel-default">
	            <div class="panel-heading">Semanal</div>
	            <div class="panel-body">
	            	<div class="row">
	            		<div class="col col-md-10">
	            			<h1>Consultas Marcadas: </h1>
	            		</div>
	            		<div class="col col-md-2">
	            			<h2>{{count($data['semanal'])}}</h2>
	            		</div>
	            	</div>
	            </div>
	        </div>
		</div>
	</div>
</div>
@endsection