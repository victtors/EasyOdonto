@extends('agenda.layout')
@section('sub-content')
<div ng-app="app" class="container" style="margin-top: 2%">
    <div class="row">
        <div ng-controller="calendarController as vm" ng-init="vm.user = {{ Auth::user() }}">
            @if(Auth::user()->tipo != 'D')
              <div style="text-align: center">
                <h3>Agenda de</h3> 
                <ui-select ng-model="vm.dentista" ng-change="vm.renderCalendar = false;vm.getConsultas(vm.dentista.id)" theme="select2" style="min-width: 300px;" title="Selecione um dentista" ng-model-options="{ debounce: {'default': 200, 'blur': 0} }">
                    <ui-select-match placeholder="Busque o dentista por nome...">@{{$select.selected.nome}}</ui-select-match>
                    <ui-select-choices refresh="vm.buscarDentistas($select.search)" repeat="dentista in vm.dentistas | propsFilter: {nome: $select.search}">
                      <div ng-bind-html="dentista.nome | highlight: $select.search"></div>
                    </ui-select-choices>
                </ui-select>
              </div>
            @endif
            @if(Auth::user()->tipo == 'D')
              <div style="text-align: center">
                <h2>Agenda do dentista {{Auth::user()->nome}}</h2>
              </div>
            @endif
            <div ui-calendar="vm.uiConfig.calendar" class="span8 calendar" ng-model="vm.eventSources" ng-if="(vm.user.tipo == 'D' && vm.renderCalendar) || (vm.renderCalendar && vm.dentista)"></div>
            @if(Auth::user()->tipo != 'D')
            <h2 ng-if="!vm.dentista"></h2>
            @endif
            <!-- Select de dentistas -->
            <script type="text/ng-template" id="modalEvento.html">
                <div class="modal-header">
                  <h3 class="modal-title" id="modal-title">Evento</h3>
                </div>
                <div class="modal-body" id="modal-body">
                    <p><b>Nome:</b> @{{vm.evento.title}}</p>
                    <p><b>CPF:</b> @{{vm.evento.paciente.cpf}}</p>
                    <p><b>Dentista:</b>@{{vm.evento.dentista.nome}}</p>
                    @if(Auth::user()->tipo == 'D')
                    <hr />
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Dente</th>
                          <th>Tratamento</th>
                          <th>Dentista</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="t in vm.tratamentos">
                          <td>@{{t.dente.nome}} - @{{t.dente.numero}}</td>
                          <td>@{{t.servico.nome}}</td>
                          <td>@{{t.dentista.nome}}</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <form ng-submit="vm.salvarTratamento()">
                            <td>
                              <ui-select ng-model="vm.dente" theme="select2" style="min-width: 300px;" title="Selecione um dente" ng-model-options="{ debounce: {'default': 200, 'blur': 0} }">
                                  <ui-select-match placeholder="Busque dente por nome...">@{{$select.selected.nome}} - @{{$select.selected.numero}}</ui-select-match>
                                  <ui-select-choices refresh="vm.buscarDentes($select.search)" repeat="dente in vm.dentes | propsFilter: {nome: $select.search, numero: $select.search}">
                                    <div ng-bind-html="dente.nome + ' - ' + dente.numero | highlight: $select.search"></div>
                                  </ui-select-choices>
                              </ui-select>
                            </td>
                            <td>
                              <ui-select ng-model="vm.servico" theme="select2" style="min-width: 300px;" title="Selecione um serviço" ng-model-options="{ debounce: {'default': 200, 'blur': 0} }">
                                  <ui-select-match placeholder="Busque o serviço por nome...">@{{$select.selected.nome}} - @{{$select.selected.numero}}</ui-select-match>
                                  <ui-select-choices refresh="vm.buscarServicos($select.search)" repeat="servico in vm.servicos | propsFilter: {nome: $select.search}">
                                    <div ng-bind-html="servico.nome | highlight: $select.search"></div>
                                  </ui-select-choices>
                              </ui-select>
                            </td>
                            <td>
                              <button type="submit" ng-click="vm.salvarTratamento()" class="btn btn-success">Feito</button>
                            </td>
                          </form>
                        </tr>
                      </tfoot>
                    </table>
                    @endif
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" ng-click="vm.fechar()">Fechar</button>
                    @if(Auth::user()->tipo == 'A')
                      <button class="btn btn-danger" type="button" ng-click="vm.excluir()">Desmarcar</button>
                    @endif
                </div>
            </script>
            <script type="text/ng-template" id="modalCriarConsulta.html">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">Marcar Consulta</h3>
                </div>
                <div class="modal-body" id="modal-body">
                      <p>Paciente</p>
                      <ui-select ng-model="vm.paciente" theme="select2" style="min-width: 300px;" title="Selecione um paciente" ng-model-options="{ debounce: {'default': 200, 'blur': 0} }">
                        <ui-select-match placeholder="Busque o paciente por nome ou cpf...">@{{$select.selected.nome}}</ui-select-match>
                        <ui-select-choices refresh="vm.buscarPacientes($select.search)" repeat="paciente in vm.pacientes | propsFilter: {nome: $select.search, cpf: $select.search}">
                          <div ng-bind-html="paciente.nome | highlight: $select.search"></div>
                          <small>
                            Cpf: <span ng-bind-html="paciente.cpf | highlight: $select.search"></span>
                          </small>
                        </ui-select-choices>
                      </ui-select>
<!--                       <p>Dentista</p>
                        <ui-select ng-model="vm.dentista" theme="select2" style="min-width: 300px;" title="Selecione um dentista" ng-model-options="{ debounce: {'default': 200, 'blur': 0} }">
                            <ui-select-match placeholder="Busque o dentista por nome...">@{{$select.selected.nome}}</ui-select-match>
                            <ui-select-choices refresh="vm.buscarDentistas($select.search)" repeat="dentista in vm.dentistas | propsFilter: {nome: $select.search}">
                              <div ng-bind-html="dentista.nome | highlight: $select.search"></div>
                            </ui-select-choices>
                        </ui-select> -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" ng-click="vm.marcar()">Marcar</button>
                    <button class="btn btn-warning" type="button" ng-click="vm.fechar()">Fechar</button>
                </div>
            </script>
        </div>
    </div>
</div>
<style type="text/css">
    body {
        padding: 15px;
    }

    .select2 > .select2-choice.ui-select-match {
        /* Because of the inclusion of Bootstrap */
        height: 29px;
    }

    .selectize-control > .selectize-dropdown {
        top: 36px;
    }
    /* Some additional styling to demonstrate that append-to-body helps achieve the proper z-index layering. */
    .select-box {
      background: #fff;
      position: relative;
      z-index: 1;
    }
    .alert-info.positioned {
      margin-top: 1em;
      position: relative;
      z-index: 10000; /* The select2 dropdown has a z-index of 9999 */
    }
</style>
<link rel="stylesheet" type="text/css" href="./css/select.css">
<link rel="stylesheet" href="./css/bootstrap-3.1.css">
<link rel="stylesheet" href="./css/select2.css"> 
<link rel="stylesheet" href="./css/fullcalendar.css"/>
<link rel="stylesheet" href="./css/ui-bootstrap-csp.css">
<!-- jquery, moment, and angular have to get included before fullcalendar -->
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/moment.min.js"></script>
<script type="text/javascript" src="./js/angular.min.js"></script>
<script src="./js/angular-sanitize.js"></script>
<script type="text/javascript" src="./js/calendar.js"></script>
<script type="text/javascript" src="./js/fullcalendar.min.js"></script>
<script type="text/javascript" src="./js/gcal.js"></script>
<script type="text/javascript" src="./js/ui-bootstrap-tpls.js"></script>
<script type="text/javascript" src="./js/select.js"></script>
<script type="text/javascript" src="./js/agenda.js"></script>
@endsection
