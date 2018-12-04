@extends('paciente.paciente')
@section('sub-content')

<div class="container-fluid">
	<div class="row cm-fix-height">
        @if(count($tratamentos) > 0)
        <img src="../../img/prontuario.jpeg">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Dente</th>
              <th>Tratamento</th>
              <th>Dentista</th>
              <th>Data</th>
              <th>
                Status
                <span><a href="javascript:window.print();" class="pull-right fa fa-2x fa-print" style="color: gray"></a></span>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($tratamentos as $key => $t)
                <tr>
                  <td>{{$t->dente->nome}} - {{$t->dente->numero}}</td>
                  <td>{{$t->servico->nome}}</td>
                  <td>{{$t->dentista->nome}}</td>
                  <td>{{$t->updated_at}}</td>
                  <td>Concluído</td>
                </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <h2>O paciente ainda não passou por nenhum tratamento!</h2>
        @endif
	</div>
</div>
@endsection