@extends('paciente.paciente')
@section('sub-content')
<div class="container-fluid">
	<div class="row cm-fix-height">
        <img src="../../img/prontuario.jpeg">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Dente</th>
              <th>Tratamento</th>
              <th>Dentista</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tratamentos as $key => $t)
                <tr>
                  <td>{{$t->dente->nome}} - {{$t->dente->numero}}</td>
                  <td>{{$t->servico->nome}}</td>
                  <td>{{$t->dentista->nome}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
	</div>
</div>
@endsection