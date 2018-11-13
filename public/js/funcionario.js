(function(){
    const app = angular.module('funcionario', ['ngSanitize', 'ngMask', 'brasil.filters'])
        .controller('funcionarioListaController', funcionarioListaController)
        .controller('funcionarioCadastroController', funcionarioCadastroController);
        
    function funcionarioListaController(){
    	const vm = this;

    	init();

    	function init(){
    	}

    }

    function funcionarioCadastroController(){
        const vm = this;

        init();

        function init(){
            console.log("Controller cadastro paciente!");
        }

    }

})();