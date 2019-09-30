var app = angular.module('universidadApp',['ngRoute']);

app.controller('mainCtrl', ['$scope','$http', function($scope,$http){

  $scope.menuSuperior = "parciales/menu.html";
  $scope.setActive=function(Opcion){

    $scope.mInicio="";
    $scope.mAlumnos="";
    $scope.mProfesores="";
    $scope[Opcion]="active";

  }

}]);
