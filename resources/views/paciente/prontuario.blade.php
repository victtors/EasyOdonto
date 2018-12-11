@extends('paciente.paciente')
@section('sub-content')

<div class="container-fluid">
	<div class="row cm-fix-height">
        @if(count($tratamentos) > 0)
        <img src="../../img/prontuario.jpeg">
        @if (Session::has('message'))
          <div class="alert alert-success alert-dismissible show" role="alert">
            {{ Session::get('message') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        <table class="table table-bordered table-striped">
          <thead id="{{$data['paciente_id']}}" class="paciente-id">
            <tr>
              <th>Dente</th>
              <th>Tratamento</th>
              <th>Dentista</th>
              <th>Data</th>
              <th>Status</th>
              <th>
                Ações
                <span><a href="javascript:window.print();" class="pull-right fa fa-2x fa-print" style="color: gray"></a></span>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($data['tratamentos'] as $key => $t)
                <tr>
                  <form>
                    <td>
                      <span class="span{{$key}}">{{$t->dente->nome}} - {{$t->dente->numero}}</span>
                      <select id="input-dente{{$key}}" class="form-control" name="dente" style="display: none">
                        @foreach($data['dentes'] as $key_dente => $d)
                          <option value="{{$d->id}}" {{$d->id == $t->dente->id ? 'selected' : ''}}>{{$d->nome}} - {{$d->numero}}</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <span class="span{{$key}}">{{$t->servico->nome}}</span>
                      <select id="input-servico{{$key}}" class="form-control" name="servico" style="display: none">
                        @foreach($data['servicos'] as $key_servico => $s)
                          @if($s->ativo != 0)
                            <option value="{{$s->id}}" {{$s->id == $t->servico->id ? 'selected' : ''}}>{{$s->nome}}</option>
                          @endif
                        @endforeach
                      </select>
                    </td>
                    <td>{{$t->dentista->nome}}</td>
                    <td>{{$t->updated_at}}</td>
                    <td>Concluído</td>
                    <td>
                      <span>
                        @if(Auth::user()->tipo == 'D')
                        <a href="javascript:void(0)" title="Editar linha" class="pull-right fa fa-2x fa-pencil editar-linha" id="{{$key}}">
                        </a>
                        <button id="salvar{{$key}}" type="submit" class="pull-right btn btn-primary btn-salvar" style="display: none" >Salvar</button>
                        @endif
                      </span>
                    </td>
                  </form>
                </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <h2>O paciente ainda não passou por nenhum tratamento!</h2>
        @endif
	</div>
</div>
<script type="text/javascript">
$(function(){

  $('.editar-linha').click(function(event){
    const id_linha = event.target.id;
    const spans_linha = '.span' + id_linha;
    const input_dente = '#input-dente' + id_linha;
    const input_servico = '#input-servico' + id_linha;
    const input_dentista = '#input-dentista' + id_linha;
    //Esconde os spans da linha
    $(spans_linha).hide("slow");
    //Mostra os inputs da linha
    $(input_dente).css("display", "block");
    $(input_servico).css("display", "block");
    $(input_dentista).css("display", "block");
    //Mostra o botão salvar e esconde o lápis da linha
    $('#salvar'+id_linha).css("display", "block");
    $('#'+id_linha).hide("slow");
  });

  $('.btn-salvar').click(function(event){
    const id_linha = event.target.id.replace('salvar', '');
    const input_dente = '#input-dente' + id_linha;
    const input_servico = '#input-servico' + id_linha;
    const input_dentista = '#input-dentista' + id_linha;
    const paciente_id = $('.paciente-id').attr('id');
    const tratamento = {
      servico_id: $(input_servico).val(),
      dente_id: $(input_dente).val(),
      dentista_id: $(input_dentista).val(),
      paciente_id: paciente_id
    };

    let request = $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "http://localhost:8000/tratamento/edit/"+paciente_id,
      type: "post",
      data: tratamento
    });

    request.done(function(response){
      const tratamento_editado = response.tratamento;
      window.location.reload();
    });

  });

}); 
</script>
@endsection