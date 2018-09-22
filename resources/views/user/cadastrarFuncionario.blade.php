@extends("template.app2")

@section("content")

<div>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">Cadastro de Funcionário</div>
            <div class="panel-body">
                <div class="form-group">

					<form class="form-horizontal" method="POST" action="{{ url('user/storeFuncionario') }}">

		            		{{ csrf_field() }}    	
		                    <div class="form-group">
		                        <label for="nome" class="col-sm-1 control-label">Nome: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Nome do funcionário" name="nome">
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="cpf" class="col-sm-1 control-label">CPF: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="CPF: '(Ex): 123.123.123-00'" name="cpf">
		                        </div>
		                    </div>

                            <!-- Formulário d Radio -->

							<div class="form-group">
		                        <label for="tipo_usuario" class="col-sm-1 control-label">Tipo:  </label>
		                        <div class="col-sm-10">
									<input type="radio" value="Atendente" name="tipo_usuario" checked> Atendente
									<input type="radio" value="Dentista" name="tipo_usuario"> Dentista
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="cro" class="col-sm-1 control-label">CRO: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" value="." placeholder="CRO" name="cro">
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="especialidade" class="col-sm-1 control-label">Área: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" value="." placeholder="Especialidade" name="especialidade">
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="telefone" class="col-sm-1 control-label">Telefone: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="'Ex: 6899999-0000'" name="telefone">
		                        </div>
		                    </div>

                            <div class="form-group">
		                        <label for="login" class="col-sm-1 control-label">Login: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Nome de usuário" name="login">
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="senha" class="col-sm-1 control-label">Senha: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Escolha uma senha" name="senha">
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