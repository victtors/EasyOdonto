(function(){
    const app = angular.module('app', ['ui.calendar', 'ui.bootstrap'])
        .controller('calendarController', calendarController)
        .controller('modalController', modalController)

    function calendarController(uiCalendarConfig, $uibModal, $compile){
        const vm = this

        const date = new Date()
        const d = date.getDate()
        const m = date.getMonth()
        const y = date.getFullYear()

        vm.eventSource = {
            currentTimezone: 'America/Rio_Branco',
            className: 'gcal-event'
        }

        vm.events = [
            {
                id: 1,
                title: 'Tiago Nolasco',
                start: new Date(y, m, d, 8, 0),
                end: new Date(y, m, d, 8, 60),
                allDay: false,
                durationEditable: false
            },
            {
                id: 2,
                title: 'William Maffi',
                start: new Date(y, m, d, 9, 0),
                end: new Date(y, m, d, 9, 60),
                allDay: false,
                durationEditable: false
            }
        ]

        vm.eventSources = [
            vm.events, vm.eventSource
        ]

        vm.uiConfig = {
            calendar:{
                height: 450,
                editable: true,
                defaultView: 'agendaDay',
                header:{
                    left: 'month agendaDay',
                    center: 'title',
                    right: 'today prev,next',
                },
                views: {
                    month: {
                    }
                },
                buttonText: {
                    month: 'Mensal',
                    day: 'Diário',
                    today: 'Hoje'
                },
                dayClick: function(date, evt, view){
                    console.log(view.name)
                    if(view.name === 'month'){

                    }else{
                        data = new Date(date.format())
                        vm.events.push({
                            id: 3,
                            title: 'Teste',
                            start: new Date(data.getFullYear(), data.getMonth(), data.getDate(), data.getHours(), 0),
                            end: new Date(data.getFullYear(), data.getMonth(), data.getDate(), data.getHours(), 60),
                            allDay: false,
                            durationEditable: false
                        })
                    }
                },
                eventClick: function(evt){
                    const modalEvento = $uibModal.open({
                        animation: true,
                        templateUrl: 'modalEvento.html',
                        controller: 'modalController',
                        controllerAs: 'vm',
                        resolve: {
                          evento: () => {
                            return evt
                          }
                        }
                      })
                },
                eventDrop: function(evt){
                    console.log(evt.start.format())
                },
                allDaySlot: false,
                slotDuration: '01:00:00',
                dayNames: ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
                dayNamesShort: ['Seg', 'Ter', 'Quar', 'Quin', 'Sex', 'Sab', 'Dom'],
                monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
                            'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abri', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out'
                                ,'Nov', 'Dez'],
            }
        }


        setTimeout(init, 0)

        function init(){
            console.log("Componente montado!")
        }

    }

    function modalController($uibModalInstance, evento){
        const vm = this

        vm.salvar = salvar
        vm.fechar = fechar
        vm.evento = evento

        init()

        function init(){
            console.log(evento)
        }

        function salvar(){
            $uibModalInstance.close(evento)
        }

        function fechar(){
            $uibModalInstance.dismiss();
        }


    }
    
})()    