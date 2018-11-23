<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Odonto</title>
    <link rel="stylesheet" href="{{url('css/atestado.css')}}">
    <script type="text/javascript">
        window.onload = (e) => {
            window.print();
            window.close();
        }
    </script>
</head>
<body>
    <div class="atestado">
        <img class="imagem" width="200px" height="200px" src="{{url('img/logo-easyodonto.png')}}">
        <div class="titulo">Atestado Odontológico</div>
        <div class="descricao">
            Atesto, com o fim específico de dispensa de atividades trabalhistas (ou escolares), que {{$data['paciente']->nome}} portador(a) 
            do CPF:{{$data['paciente']->cpf}}, esteve sob meus cuidados profissionais no dia de hoje, devendo permanecer em repouso por {{$data['dias']}} dia(s).
        </div>
        <div class="cidade-data">
            Rio Branco-AC _____/_____/_____
        </div>
        <div class="info-dentista">
            <p>{{$data['dentista']->nome}}</p>
            <p>{{$data['dentista']->cargo}}</p>
            <p>{{$data['dentista']->cro}}</p>  	
        </div>
    </div>
</body>
</html>