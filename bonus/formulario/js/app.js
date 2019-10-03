
var app = angular.module('bonusApp',[ ]);

app.controller('mainCtrl', ['$scope', function($scope){

    $scope.formData={};

$scope.guardarDatos=function(valido){
    if(!valido){
        return;
    }
    console.log("posteando...");
}

	
}]);
