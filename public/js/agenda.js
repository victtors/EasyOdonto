(function(){
    const app = angular.module('app', ['ui.calendar', 'ui.bootstrap', 'ui.select', 'ngSanitize'])
        .controller('calendarController', calendarController)
        .controller('modalController', modalController)
        .controller('modalCriarConsultaController', modalCriarConsultaController)

    function calendarController(uiCalendarConfig, $uibModal, $compile, $http){
        const vm = this

        const date = new Date()
        const d = date.getDate()
        const m = date.getMonth()
        const y = date.getFullYear()

        vm.buscarDentistas = buscarDentistas
        vm.dentistas = []
        vm.getConsultas = getConsultas

        vm.eventSource = {
            currentTimezone: 'America/Rio_Branco',
            className: 'gcal-event'
        }

        function setCalendarConfig(tipo_usuario) {
            console.log(tipo_usuario)
            if(tipo_usuario == 'A' || tipo_usuario == 'ADM'){
                vm.uiConfig = {
                    calendar:{
                        height: 600,
                        editable: true,
                        defaultView: 'agendaWeek',
                        header:{
                            right: 'today prev,next',
                        },
                        buttonText: {
                            today: 'Hoje'
                        },
                        dayClick: function(date, evt, view){
                            const data = new Date(date.format())
                            const modalCriarConsulta = $uibModal.open({
                                animation: true,
                                templateUrl: 'modalCriarConsulta.html',
                                controller: 'modalCriarConsultaController',
                                controllerAs: 'vm',
                                resolve: {
                                  evento: () => {
                                    return data
                                  },
                                  pacientes: () => {
                                    return []
                                  },
                                  dentista: () => vm.dentista
                                }
                            })

                            modalCriarConsulta.result.then((consulta) => {
                                $http.post("http://localhost:8000/api/consulta", consulta)
                                    .then(
                                        (response) => {
                                            console.log(response)
                                            getConsultas(response.data.consulta.dentista_id)
                                        },
                                        (error) => {
                                            console.log(error)
                                        }
                                    )
                            }, () => {
                          
                            })
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
                                    },
                                    servicos: () => null,
                                    dentes: () => null,
                                    tratamentos: () => null,
                                    user: () => null 
                                }
                            })

                            modalEvento.result.then(() => {

                            }, () => {
                                vm.renderCalendar = false
                                getConsultas(vm.dentista.id)
                            })

                        },
                        eventDrop: function(evt){
                            let data = new Date(evt.start.format())
                            let consulta = {
                                paciente_id: evt.paciente_id,
                                dentista_id: evt.dentista_id,
                                data: new Date(data.getFullYear(), data.getMonth(), data.getDate(), data.getHours() - 5, 0).toMysqlFormat(),
                            }
                            $http.put("http://localhost:8000/api/consulta/"+evt.id, consulta)
                                .then(
                                    (response) => {
                                        console.log(response)
                                        getConsultas(response.data.dentista_id)
                                    },
                                    (error) => {
                                        console.log(error)
                                    }
                                )
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
            }else{
                vm.uiConfig = {
                    calendar:{
                        height: 600,
                        editable: false,
                        defaultView: 'agendaWeek',
                        header:{
                            right: 'today prev,next',
                        },
                        buttonText: {
                            today: 'Hoje'
                        },
                        dayClick: function(date, evt, view){
                            console.log(date)
                        },
                        eventClick: function(evt){
                            const modalEvento = $uibModal.open({
                                animation: true,
                                templateUrl: 'modalEvento.html',
                                controller: 'modalController',
                                controllerAs: 'vm',
                                size: 'lg',
                                resolve: {
                                  evento: () => {
                                    return evt
                                  },
                                  servicos: () => {
                                    return $http.get("http://localhost:8000/servico/lista?api=true").then((response) => {
                                        return response.data.data
                                    })
                                  },
                                  dentes: () => {
                                    return $http.get("http://localhost:8000/dente/lista?api=true").then((response) => {
                                        return response.data.data
                                    })
                                  },
                                  tratamentos: () => {
                                    return $http.get("http://localhost:8000/tratamento/lista?api=true&paciente_id="+evt.paciente_id)
                                        .then(
                                            response => response.data.data,
                                            error => console.log(error)
                                        )
                                  },
                                  user: () => {
                                    return vm.user
                                  }
                                }
                              })

                            modalEvento.result.then(() => {

                            }, () => {
                                vm.renderCalendar = false
                                getConsultas()
                            })

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
            }
        }


        init()

        function init(){
            console.log(vm.user)
            buscarDentistas();
            setTimeout(() => {
                if(vm.user.tipo == 'D')
                    getConsultas(vm.user.id)
            }, 100)
        }

        function getConsultas(dentista_id){
            vm.renderCalendar = false
            if(vm.user.tipo == 'D' && !dentista_id)
                dentista_id = vm.user.id
            $http.get('http://localhost:8000/api/consulta?dentista_id='+dentista_id)
                .then(
                    (response) => {
                        console.log(response)
                        let events = []
                        response.data.map((e) => {
                            let data = new Date(e.data)
                            let title = e.paciente.nome
                            let start = new Date(data.getFullYear(), data.getMonth(), data.getDate(), data.getHours(), 0)
                            let end = new Date(data.getFullYear(), data.getMonth(), data.getDate(), data.getHours(), 60)
                            events.push({
                                id: e.id,
                                title: title,
                                start: start,
                                end: end,
                                paciente_id: e.paciente_id,
                                dentista_id: e.dentista_id,
                                paciente: e.paciente,
                                dentista: e.dentista,
                                allDay: false,
                                durationEditable: false
                            })
                        })
                        setCalendarConfig(vm.user.tipo)
                        vm.eventSources = [events, vm.eventSource]
                        vm.renderCalendar = true
                    },
                    (error) => {
                        console.log(error)
                    }
                )
        }

        function buscarDentistas(busca){
            $http.get("http://localhost:8000/users/lista?s="+busca+'&api=true&dentista=true')
                .then(
                    (response) => {
                        console.log(response)
                        vm.dentistas = response.data.data
                    },
                    (error) => {
                        console.log(error)
                    }
                )
        }

        function twoDigits(d) {
            if(0 <= d && d < 10) return "0" + d.toString()
            if(-10 < d && d < 0) return "-0" + (-1*d).toString()
            return d.toString()
        }

        Date.prototype.toMysqlFormat = function() {
            return this.getUTCFullYear() + "-" + twoDigits(1 + this.getUTCMonth()) + "-" + twoDigits(this.getUTCDate()) + " " + twoDigits(this.getUTCHours()) + ":" + twoDigits(this.getUTCMinutes()) + ":" + twoDigits(this.getUTCSeconds());
        }

    }

    function modalCriarConsultaController($uibModalInstance, pacientes, evento, $http, dentista){
        const vm = this

        vm.marcar = marcar
        vm.fechar = fechar
        vm.data = evento
        vm.pacientes = pacientes
        vm.buscarPacientes = buscarPacientes
        vm.dentista = dentista
        // vm.buscarDentistas = buscarDentistas
        // vm.dentistas = []
        console.log(dentista)

        function marcar(){
            let formData = {
                paciente_id: vm.paciente.id,
                dentista_id: vm.dentista.id,
                data: new Date(vm.data.getFullYear(), vm.data.getMonth(), vm.data.getDate(), vm.data.getHours() - 5, 0).toMysqlFormat()
            }
            $uibModalInstance.close(formData)
        }

        function buscarPacientes(busca){
            $http.get("http://localhost:8000/paciente/lista?s="+busca+'&api=true')
                .then(
                    (response) => {
                        console.log(response)
                        vm.pacientes = response.data.data
                    },
                    (error) => {
                        console.log(error)
                    }
                )
        }

        function fechar(){
            $uibModalInstance.dismiss()
        }

        // function buscarDentistas(busca){
        //     $http.get("http://localhost:8000/users/lista?s="+busca+'&api=true&dentista=true')
        //         .then(
        //             (response) => {
        //                 console.log(response)
        //                 vm.dentistas = response.data.data
        //             },
        //             (error) => {
        //                 console.log(error)
        //             }
        //         )
        // }

    }

    function modalController($uibModalInstance, evento, $http, servicos, dentes, user, tratamentos){
        const vm = this

        console.log(tratamentos)

        vm.salvar = salvar
        vm.fechar = fechar
        vm.evento = evento
        vm.excluir = excluir
        vm.buscarDentistas = buscarDentistas
        vm.buscarDentes = buscarDentes
        vm.buscarServicos = buscarServicos
        vm.servicos = servicos
        vm.dentes = dentes
        vm.salvarTratamento = salvarTratamento
        vm.dentistas = []
        vm.tratamentos = []


        init()

        function init(){
            buscarDentistas()
            console.log(evento)
            vm.tratamentos = tratamentos
        }

        function salvar(){
            $uibModalInstance.close(evento)
        }

        function fechar(){
            $uibModalInstance.dismiss()
        }

        function excluir(){
            $http.delete("http://localhost:8000/api/consulta/"+vm.evento.id)
                .then(
                    (response) => {
                        console.log(response)
                        fechar()
                    },
                    (error) => {

                    }
                )
        }

        function buscarDentistas(busca){
            $http.get("http://localhost:8000/users/lista?s="+busca+'&api=true&dentista=true')
                .then(
                    (response) => {
                        console.log(response)
                        vm.dentistas = response.data.data
                    },
                    (error) => {
                        console.log(error)
                    }
                )
        }

        function buscarServicos(busca){
            $http.get("http://localhost:8000/servico/lista?api=true&s="+busca).then(
                (response) => {
                    console.log(response)
                    vm.servicos = response.data.data
                },
                (error) => console.log(error)
            )
        }

        function buscarDentes(busca){
            $http.get("http://localhost:8000/dente/lista?api=true&s="+busca).then(
                (response) => {
                    console.log(response)
                    vm.dentes = response.data.data
                },
                (error) => console.log(error)
            )
        }

        function salvarTratamento(){
            let tratamento = {
                servico_id: vm.servico.id,
                dente_id: vm.dente.id,
                dentista_id: user.id,
                paciente_id: evento.paciente_id
            }
            console.log(tratamento)
            $http.post("http://localhost:8000/tratamentos", tratamento)
                .then(
                    response => {
                        console.log(response)
                        $http.get("http://localhost:8000/tratamento/lista?api=true&paciente_id="+vm.evento.paciente_id)
                            .then(
                                response => {
                                    vm.servico = null
                                    vm.dente = null
                                    vm.tratamentos = response.data.data
                                },
                                error => console.log(error)
                            )
                    },
                    error => console.log(error)
                )
        }



    }

    app.filter('propsFilter', function() {
        return function(items, props) {
        var out = [];

        if (angular.isArray(items)) {
          var keys = Object.keys(props);

          items.forEach(function(item) {
            var itemMatches = false;

            for (var i = 0; i < keys.length; i++) {
              var prop = keys[i];
              var text = props[prop].toLowerCase();
              if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
                itemMatches = true;
                break;
              }
            }

            if (itemMatches) {
              out.push(item);
            }
          });
        } else {
          // Let the output be the input untouched
          out = items;
        }

        return out;
        }
    })


    
})()    