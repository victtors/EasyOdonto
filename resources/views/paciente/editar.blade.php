@extends('paciente.paciente')
@section('sub-content')
	<div class="container-fluid">
		<div class="row cm-fix-height">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-heading">Paciente {{$paciente->nome}}</div>
		            <div class="panel-body">
		                <form class="form-horizontal" method="POST" action="./{{$paciente->id}}">
		                	@csrf
		                	<div class="form-group">
		                        <label for="nome" class="col-sm-1 control-label">Nome: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Nome do paciente" name="nome" value="{{$paciente->nome}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

                    		<div class="form-group">
		                        <label for="nome" class="col-sm-1 control-label">CPF: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="CPF do paciente" name="cpf" ng-value="{{$paciente->cpf}} | cpf" mask="999.999.999-99" disabled ng-model="vm.cpf"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="data_nascimento" class="col-sm-1 control-label">Data de Nascimento</label>
		                        <div class="col-sm-3">
		                            <input type="date" class="form-control" name="data_nascimento" value="{{$paciente->data_nascimento}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="genero" class="col-sm-1 control-label">Gênero: </label>
		                        <div>
		                            <input type="radio" value="masculino" name="genero" {{$paciente->genero == 'masculino' ?  'checked': ''}}
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            > Masculino 
									<input type="radio" value="feminino" name="genero" {{$paciente->genero == 'feminino' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Feminino 
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="endereco" class="col-sm-1 control-label">Endereço: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Endereço: Rua, 123 - Bairro" name="endereco" value="{{$paciente->endereco}}" {{Auth::user()->tipo == 'D' ? 'disabled': ''}}>
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="cidade" class="col-sm-1 control-label">Cidade: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="{{$paciente->cidade}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="estado" class="col-sm-1 control-label">Estado: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Estado" name="estado" value="{{$paciente->estado}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="nacionalidade" class="col-sm-2">Nacionalidade: </label>
		                        <div>
									<input type="radio" value="brasileiro" name="nacionalidade" {{$paciente->nacionalidade == 'brasileiro' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Brasileiro
									<input type="radio" value="estrangeiro" name="nacionalidade"{{$paciente->nacionalidade == 'estrangeiro' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Estrangeiro
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="profissao" class="col-sm-1 control-label">Profissão: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="Profissão" name="profissao" value="{{$paciente->profissao}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="contato" class="col-sm-1 control-label">Contato: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="'Ex: 6899999-0000'" name="contato" value="{{$paciente->contato}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

							<div class="form-group">
		                        <label for="email" class="col-sm-1 control-label">E-mail: </label>
		                        <div class="col-sm-10">
		                            <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{$paciente->email}}"
		                            {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
		                            >
		                        </div>
		                    </div>

						<!-- Formulário de Anamnese -->

							<div class="form-group">
		                        <label for="tratamentoMedico" class="col-sm-3">Já fez tratamento médico? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="tratamentoMedico" {{$paciente->tratamentoMedico == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="tratamentoMedico"{{$paciente->tratamentoMedico == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="tomandoRemedio" class="col-sm-3">Está tomando algum remédio? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="tomandoRemedio" {{$paciente->tomandoRemedio == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="tomandoRemedio" {{$paciente->tomandoRemedio == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="estaGravida" class="col-sm-3">Está grávida? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="estaGravida" {{$paciente->estaGravida == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="estaGravida" {{$paciente->estaGravida == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="suspendeuRemedio" class="col-sm-3">Suspendeu algum remédio? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="suspendeuRemedio" checked {{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="suspendeuRemedio"
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="alergia" class="col-sm-3">Tem algum tipo de alergia? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="alergia" {{$paciente->alergia == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="alergia" {{$paciente->alergia == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="sensivelMetalouLatex" class="col-sm-3">É sensível a metais ou latex? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="sensivelMetalouLatex" {{$paciente->sensivelMetalouLatex == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="sensivelMetalouLatex" {{$paciente->sensivelMetalouLatex == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="diabetico" class="col-sm-3">É diabético? </label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="diabetico" {{$paciente->diabetico == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="diabetico" {{$paciente->diabetico == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="sujeitoAInfeccoes" class="col-sm-3">É sujeito a infecções?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="sujeitoAInfeccoes" {{$paciente->sujeitoAInfeccoes == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="sujeitoAInfeccoes" {{$paciente->sujeitoAInfeccoes == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="epilepsia" class="col-sm-3">Tem ataques nervosos?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="epilepsia" {{$paciente->epilepsia == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="epilepsia" {{$paciente->epilepsia == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="desmaiaTonturas" class="col-sm-3">Costuma sentir tontura?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="desmaiaTonturas" {{$paciente->desmaiaTonturas == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="desmaiaTonturas" {{$paciente->desmaiaTonturas == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="pressaoIrregular" class="col-sm-3">Tem problema de pressão?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="pressaoIrregular" {{$paciente->pressaoIrregular == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="pressaoIrregular" {{$paciente->pressaoIrregular == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="formigamentoExtremidades" class="col-sm-3">Tem formigamento nas extremidades?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="formigamentoExtremidades" {{$paciente->formigamentoExtremidades == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="formigamentoExtremidades" {{$paciente->formigamentoExtremidades == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="sangraMuito" class="col-sm-3">Quando se fere sangra muito?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="sangraMuito" {{$paciente->sangraMuito == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="sangraMuito" {{$paciente->sangraMuito == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="fuma" class="col-sm-3">Fuma?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="fuma" {{$paciente->fuma == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="fuma" {{$paciente->fuma == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="foiOperado" class="col-sm-3">Já foi operado?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="foiOperado" {{$paciente->foiOperado == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim " name="foiOperado" {{$paciente->foiOperado == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="doencaGrave" class="col-sm-3">Já teve algumadoença grave?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="doencaGrave" {{$paciente->doencaGrave == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim " name="doencaGrave" {{$paciente->doencaGrave == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="problemasCardiacos" class="col-sm-3">Tem problemas cardíacos?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="problemasCardiacos" {{$paciente->problemasCardiacos == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="problemasCardiacos"{{$paciente->problemasCardiacos == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<!-- Dados da saúde bucal -->

							<div class="form-group">
		                        <label for="respiraBemPeloNariz" class="col-sm-3">Respira bem pelo nariz?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="respiraBemPeloNariz" {{$paciente->respiraBemPeloNariz == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="respiraBemPeloNariz" {{$paciente->respiraBemPeloNariz == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="dificuldadeAbrirBoca" class="col-sm-3">Dificuldade ao abrir a boca?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="dificuldadeAbrirBoca" {{$paciente->dificuldadeAbrirBoca == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="dificuldadeAbrirBoca" {{$paciente->dificuldadeAbrirBoca == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="doresNaFace" class="col-sm-3">Sente dores na face?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="doresNaFace" {{$paciente->doresNaFace == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="doresNaFace" {{$paciente->doresNaFace == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="rangeOsDentes" class="col-sm-3">Range os dentes?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="rangeOsDentes" {{$paciente->rangeOsDentes == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="rangeOsDentes" {{$paciente->rangeOsDentes == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="emamastigaBemAlimentosil" class="col-sm-3">Mastiga bem os alimentos?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="emamastigaBemAlimentosil" {{$paciente->emamastigaBemAlimentosil == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="emamastigaBemAlimentosil" {{$paciente->emamastigaBemAlimentosil == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="retencaoDeComida" class="col-sm-3">Sente retenção de alimentos entre os dentes?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="retencaoDeComida" {{$paciente->retencaoDeComida == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="retencaoDeComida" {{$paciente->retencaoDeComida == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="mascarChiclete" class="col-sm-3">Tem o hábito de mascar chiclete?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="mascarChiclete" {{$paciente->mascarChiclete == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="mascarChiclete" {{$paciente->mascarChiclete == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="tomarCafe" class="col-sm-3">Toma café com muita frequência?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="tomarCafe" {{$paciente->tomarCafe == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="tomarCafe" {{$paciente->tomarCafe == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="comerForaDeHora" class="col-sm-3">Costuma comer fora de hora?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="comerForaDeHora" {{$paciente->comerForaDeHora == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="comerForaDeHora" {{$paciente->comerForaDeHora == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="gengivaDolorida" class="col-sm-3">Sente sua genguva dolorida ou inchada?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="gengivaDolorida" {{$paciente->gengivaDolorida == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="gengivaDolorida" {{$paciente->gengivaDolorida == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="instrucaoDeHigieneBucal" class="col-sm-3">Já teve instrução de higiene bucal?</label>
		                        <div class="col-sm-3">
									<input type="radio" value="Não" name="instrucaoDeHigieneBucal" {{$paciente->instrucaoDeHigieneBucal == 'Não' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Não
									<input type="radio" value="Sim" name="instrucaoDeHigieneBucal" {{$paciente->instrucaoDeHigieneBucal == 'Sim' ?  'checked': ''}}
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									> Sim
		                        </div>
							</div>

							<div class="form-group">
		                        <label for="escovarOsDentes" class="col-sm-3">Quantas vezes escova os dentes ao dia?</label>
		                        <div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Quantas vezes?" name="escovarOsDentes" value="{{$paciente->escovarOsDentes}}"
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									>
		                    	</div>
							</div>

							<div class="form-group">
		                        <label for="fioDental" class="col-sm-3">Quantas vezes usa fio dental ao dia?</label>
		                        <div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Quantas vezes?" name="fioDental" value="{{$paciente->fioDental}}"
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									>
		                    	</div>
							</div>

							<div class="form-group">
		                        <label for="vaiAoDentista" class="col-sm-3">Com que frequência vai ao dentista?</label>
		                        <div class="col-sm-9">
									<input type="text" class="form-control" placeholder="'Ex: Uma vez por mês'" name="vaiAoDentista" value="{{$paciente->vaiAoDentista}}"
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									>
		                    	</div>
							</div>

							<div class="form-group">
		                        <label for="tratamentoOdontológico" class="col-sm-3">Quando foi seu último tratamento?</label>
		                        <div class="col-sm-9">
									<input type="text" class="form-control" placeholder="'Ex: 2 meses atrás'" name="tratamentoOdontológico" value="{{$paciente->tratamentoOdontológico}}"
									{{Auth::user()->tipo == 'D' ? 'disabled': ''}}
									>
		                    	</div>
							</div>
							@if(Auth::user()->tipo != 'D')
		                    	<button style="float: right" type="submit" class="btn btn-primary">Salvar</button>
		                    @endif
		                </form>
		            </div>
		        </div>
                <a style="float: left;" class="btn btn-danger" href="{{ URL::to('paciente/lista') }}">Voltar para lista</a>
	        </div>
		</div>
	</div>
@endsection