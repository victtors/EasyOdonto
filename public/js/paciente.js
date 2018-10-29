(function(){
    const app = angular.module('paciente', ['ngSanitize', 'ngMask', 'brasil.filters'])
        .controller('pacienteCadastroController', pacienteCadastroController)
        .controller('pacienteListaController', pacienteListaController)

    function pacienteCadastroController(){
    	const vm = this;

    	init();

    	function init(){

    	}

    }

    function pacienteListaController(){
        const vm = this;

        init();

        function init(){

        }

    }

})();