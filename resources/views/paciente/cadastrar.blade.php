@extends('paciente.paciente')
@section('sub-content')
	<div class="container-fluid" ng-controller="pacienteCadastroController">
		<div class="row cm-fix-height">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-heading">Cadastrar Paciente</div>
		            <div class="panel-body">
		                <form name="pacienteForm" class="form-horizontal" method="POST" action="{{ route('pacientes') }}">
		                	@csrf
		                	<div id="passo1">
	                    		<div class="form-group" ng-class="{ 'has-error' : pacienteForm.nome.$invalid && !pacienteForm.nome.$pristine }">
			                        <label for="nome" class="col-sm-1 control-label">Nome: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="Nome do paciente" name="nome" ng-model="paciente.nome" required>
			                            <p ng-show="pacienterForm.nome.$invalid && !pacienteForm.nome.$pristine" class="help-block">O campo nome é obrigatório!</p>
			                        </div>
			                    </div>

			                    <div class="form-group" ng-class="{ 'has-error' : pacienteForm.cpf.$invalid && !pacienteForm.cpf.$pristine }">
			                        <label for="cpf" class="col-sm-1 control-label">CPF: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="CPF do paciente" ng-model="vm.cpf" name="cpf"
			                            mask="999.999.999-99" required 
			                            />
			                            <p ng-show="pacienterForm.cpf.$invalid && !pacienteForm.cpf.$pristine" class="help-block">O campo cpf é obrigatório!</p>
			                        </div>
			                    </div>

								<div class="form-group" ng-class="{ 'has-error' : pacienteForm.data_nascimento.$invalid && !pacienteForm.data_nascimento.$pristine }">
			                        <label for="data_nascimento" class="col-sm-1 control-label">Data de Nascimento</label>
			                        <div class="col-sm-3">
			                            <input type="date" class="form-control" name="data_nascimento">
			                            <p ng-show="pacienterForm.data_nascimento.$invalid && !pacienteForm.data_nascimento.$pristine" class="help-block">O campo data de nascimento é obrigatório!</p>
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="genero" class="col-sm-1 control-label">Gênero: </label>
			                        <div>
			                            <input type="radio" value="masculino" name="genero" checked> Masculino 
										<input type="radio" value="feminino" name="genero"> Feminino 
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="endereco" class="col-sm-1 control-label">Endereço: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="Endereço: Rua, 123 - Bairro" name="endereco">
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="cidade" class="col-sm-1 control-label">Cidade: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="Cidade" name="cidade">
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="estado" class="col-sm-1 control-label">Estado: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="Estado" name="estado">
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="nacionalidade" class="col-sm-1 control-label">Nacionalidade: </label>
			                        <div class="col-sm-10">
										<input type="radio" value="brasileiro" name="nacionalidade" checked> Brasileiro
										<input type="radio" value="estrangeiro" name="nacionalidade"> Estrangeiro
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="profissao" class="col-sm-1 control-label">Profissão: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="Profissão" name="profissao">
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="contato" class="col-sm-1 control-label">Contato: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" mask="(99)99999-9999" ng-model="telefone" placeholder="'Ex: 6899999-0000'" name="contato">
			                        </div>
			                    </div>

								<div class="form-group">
			                        <label for="email" class="col-sm-1 control-label">E-mail: </label>
			                        <div class="col-sm-10">
			                            <input type="text" class="form-control" placeholder="E-mail" name="email">
			                        </div>
			                    </div>
			                    <button style="float: right" type="button" class="btn btn-success" id="btn-passo1">Próximo</button>
		                	</div>

						<!-- Formulário de Anamnese -->
							<div id="passo2">
								<div class="form-group">
			                        <label for="tratamentoMedico" class="col-sm-3">Já fez tratamento médico? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="tratamentoMedico" checked> Não
										<input type="radio" value="Sim" name="tratamentoMedico"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="tomandoRemedio" class="col-sm-3">Está tomando algum remédio? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="tomandoRemedio" checked> Não
										<input type="radio" value="Sim" name="tomandoRemedio"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="estaGravida" class="col-sm-3">Está grávida? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="estaGravida" checked> Não
										<input type="radio" value="Sim" name="estaGravida"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="suspendeuRemedio" class="col-sm-3">Suspendeu algum remédio? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="suspendeuRemedio" checked> Não
										<input type="radio" value="Sim" name="suspendeuRemedio"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="alergia" class="col-sm-3">Tem algum tipo de alergia? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="alergia" checked> Não
										<input type="radio" value="Sim" name="alergia"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="sensivelMetalouLatex" class="col-sm-3">É sensível a metais ou latex? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="sensivelMetalouLatex" checked> Não
										<input type="radio" value="Sim" name="sensivelMetalouLatex"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="diabetico" class="col-sm-3">É diabético? </label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="diabetico" checked> Não
										<input type="radio" value="Sim" name="diabetico"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="sujeitoAInfeccoes" class="col-sm-3">É sujeito a infecções?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="sujeitoAInfeccoes" checked> Não
										<input type="radio" value="Sim" name="sujeitoAInfeccoes"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="epilepsia" class="col-sm-3">Tem ataques nervosos?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="epilepsia" checked> Não
										<input type="radio" value="Sim" name="epilepsia"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="desmaiaTonturas" class="col-sm-3">Costuma sentir tontura?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="desmaiaTonturas" checked> Não
										<input type="radio" value="Sim" name="desmaiaTonturas"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="pressaoIrregular" class="col-sm-3">Tem problema de pressão?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="pressaoIrregular" checked> Não
										<input type="radio" value="Sim" name="pressaoIrregular"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="formigamentoExtremidades" class="col-sm-3">Tem formigamento nas extremidades?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="formigamentoExtremidades" checked> Não
										<input type="radio" value="Sim" name="formigamentoExtremidades"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="sangraMuito" class="col-sm-3">Quando se fere sangra muito?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="sangraMuito" checked> Não
										<input type="radio" value="Sim" name="sangraMuito"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="fuma" class="col-sm-3">Fuma?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="fuma" checked> Não
										<input type="radio" value="Sim" name="fuma"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="foiOperado" class="col-sm-3">Já foi operado?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="foiOperado" checked> Não
										<input type="radio" value="Sim " name="foiOperado"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="doencaGrave" class="col-sm-3">Já teve algumadoença grave?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="doencaGrave" checked> Não
										<input type="radio" value="Sim " name="doencaGrave"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="problemasCardiacos" class="col-sm-3">Tem problemas cardíacos?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="problemasCardiacos" checked> Não
										<input type="radio" value="Sim" name="problemasCardiacos"> Sim
			                        </div>
								</div>

								<!-- Dados da saúde bucal -->

								<div class="form-group">
			                        <label for="respiraBemPeloNariz" class="col-sm-3">Respira bem pelo nariz?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="respiraBemPeloNariz" checked> Não
										<input type="radio" value="Sim" name="respiraBemPeloNariz"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="dificuldadeAbrirBoca" class="col-sm-3">Dificuldade ao abrir a boca?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="dificuldadeAbrirBoca" checked> Não
										<input type="radio" value="Sim" name="dificuldadeAbrirBoca"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="doresNaFace" class="col-sm-3">Sente dores na face?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="doresNaFace" checked> Não
										<input type="radio" value="Sim" name="doresNaFace"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="rangeOsDentes" class="col-sm-3">Range os dentes?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="rangeOsDentes" checked> Não
										<input type="radio" value="Sim" name="rangeOsDentes"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="emamastigaBemAlimentosil" class="col-sm-3">Mastiga bem os alimentos?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="emamastigaBemAlimentosil" checked> Não
										<input type="radio" value="Sim" name="emamastigaBemAlimentosil"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="retencaoDeComida" class="col-sm-3">Sente retenção de alimentos entre os dentes?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="retencaoDeComida" checked> Não
										<input type="radio" value="Sim" name="retencaoDeComida"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="mascarChiclete" class="col-sm-3">Tem o hábito de mascar chiclete?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="mascarChiclete" checked> Não
										<input type="radio" value="Sim" name="mascarChiclete"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="tomarCafe" class="col-sm-3">Toma café com muita frequência?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="tomarCafe" checked> Não
										<input type="radio" value="Sim" name="tomarCafe"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="comerForaDeHora" class="col-sm-3">Costuma comer fora de hora?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="comerForaDeHora" checked> Não
										<input type="radio" value="Sim" name="comerForaDeHora"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="gengivaDolorida" class="col-sm-3">Sente sua genguva dolorida ou inchada?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="gengivaDolorida" checked> Não
										<input type="radio" value="Sim" name="gengivaDolorida"> Sim
			                        </div>
								</div>

								<div class="form-group">
			                        <label for="instrucaoDeHigieneBucal" class="col-sm-3">Já teve instrução de higiene bucal?</label>
			                        <div class="col-sm-3">
										<input type="radio" value="Não" name="instrucaoDeHigieneBucal" checked> Não
										<input type="radio" value="Sim" name="instrucaoDeHigieneBucal"> Sim
			                        </div>
								</div>
								<button style="float: left" type="button" class="btn btn-danger" id="btn-voltar-passo2">Voltar</button>
								<button style="float: right" type="button" class="btn btn-success" id="btn-passo2">Próximo</button>
							</div>

							<div id="passo3">
								<div class="form-group">
			                        <label for="escovarOsDentes" class="col-sm-3">Quantas vezes escova os dentes ao dia?</label>
			                        <div class="col-sm-9">
										<select name="escovarOsDentes" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="mais3">Mais de 3</option>
										</select>
			                    	</div>
								</div>

								<div class="form-group">
			                        <label for="fioDental" class="col-sm-3">Quantas vezes usa fio dental ao dia?</label>
			                        <div class="col-sm-9">
										<select name="fioDental" class="form-control">
											<option value="0">Nenhuma</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="mais3">Mais de 3</option>
										</select>
			                    	</div>
								</div>

								<div class="form-group">
			                        <label for="vaiAoDentista" class="col-sm-3">Com que frequência vai ao dentista (ao ano) ?</label>
			                        <div class="col-sm-9">
										<select name="vaiAoDentista" class="form-control">
											<option value="0">Nenhuma</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="mais3">Mais de 3</option>
										</select>
			                    	</div>
								</div>

								<div class="form-group">
			                        <label for="tratamentoOdontológico" class="col-sm-3">Quando foi seu último tratamento?</label>
			                        <div class="col-sm-9">
										<select name="tratamentoOdontológico" class="form-control">
											<option value="0">Sem tratamento</option>
											<option value="1">1 mês atrás</option>
											<option value="2">2 meses atrás</option>
											<option value="3">3 meses atrás</option>
											<option value="4">4 meses atrás</option>
											<option value="5">5 meses atrás</option>
											<option value="6">6 meses atrás</option>
											<option value="mais6">Mais de 6 meses atrás</option>
										</select>
			                    	</div>
								</div>
								<button style="float: left" type="button" class="btn btn-danger" id="btn-voltar-passo3">Voltar</button>
			                    <button style="float: right" type="submit" class="btn btn-primary">Salvar</button>
		                 	</div>
		                </form>
		                <br>
		            </div>
		        </div>
	        </div>
		</div>
	</div>
<script type="text/javascript">
$(function(){

	$("#passo2").hide();
	$("#passo3").hide();

	$("#btn-passo1").click(() => {
		$("#passo1").hide("slow");
		$("#passo2").show("slow");
		$("#passo3").hide("slow");
	})

	$("#btn-passo2").click(() => {
		$("#passo1").hide("slow");
		$("#passo2").hide("slow");
		$("#passo3").show("slow");
	})

	$("#btn-voltar-passo2").click(() => {
		$("#passo1").show("slow");
		$("#passo2").hide("slow");
		$("#passo3").hide("slow");
	})

	$("#btn-voltar-passo3").click(() => {
		$("#passo1").hide("slow");
		$("#passo2").show("slow");
		$("#passo3").hide("slow");
	})

});	
</script>
@endsection