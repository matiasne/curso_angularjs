
var app = angular.module('bonusApp',[ ]);

app.controller('mainCtrl', ['$scope', function($scope){
$scope.mensajeTest="Ola k ase";
$scope.titulo="no se inunda mas";
$scope.subtitulo="el choripan de oro";
$scope.mostrar_alerta=function(){
    swal ($scope.mensajeTest ) ;
}

$scope.mostrar_subtitulo=function(){
    swal ( $scope.titulo ,$scope.subtitulo);  
}
	
}]);
