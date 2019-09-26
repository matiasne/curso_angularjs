(function(){

var app = angular.module('universidadApp',[ ]);

app.controller('listadoCtrl', ['$scope', function($scope){
	
    $scope.listado=["Gaston","Matias","Nicolas","Mario"];

    $scope.listadoProfesores={
        profesores:[{
            nombre:"Gaston",
            edad:"22",
            clase:"POO"
            
        },
        {
            nombre:"Nicolas",
            edad:"24",
            clase:"HTML Y CSS"
        },
         {
            nombre:"Matias",
            edad:"32",
            clase:"ing electronico"
         }]
    }



}]);





})();
