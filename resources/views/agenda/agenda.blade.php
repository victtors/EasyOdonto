<html ng-app="app" lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container" style="margin-top: 2%">
            <div class="row">
                <div ng-controller="calendarController as vm">
                    <div ui-calendar="vm.uiConfig.calendar" class="span8 calendar" ng-model="vm.eventSources" calendar="myCalendar"></div>
                    <script type="text/ng-template" id="modalEvento.html">
                        <div class="modal-header">
                                <h3 class="modal-title" id="modal-title">Evento</h3>
                        </div>
                        <div class="modal-body" id="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button" ng-click="vm.salvar()">Salvar</button>
                            <button class="btn btn-warning" type="button" ng-click="vm.fechar()">Fechar</button>
                        </div>
                    </script>
                </div>
            </div>
        </div>
    </body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fullcalendar.css"/>
    <link rel="stylesheet" href="./css/ui-bootstrap-csp.css">
    <!-- jquery, moment, and angular have to get included before fullcalendar -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/moment.min.js"></script>
    <script type="text/javascript" src="./js/angular.min.js"></script>
    <script type="text/javascript" src="./js/calendar.js"></script>
    <script type="text/javascript" src="./js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="./js/gcal.js"></script>
    <script type="text/javascript" src="./js/ui-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="./js/agenda.js"></script>
</html>
