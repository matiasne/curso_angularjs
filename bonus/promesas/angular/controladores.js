var app= angular.module('promesaApp.controladores',[])

app.controller('mainCtrl',['$scope', '$q', function($scope, $q){

    $scope.miVar=0;

    console.log("todo OK!");

    $scope.sumar=function(num){

        var q=$q.defer();

        var valido=true;

        num ++;
        
        setTimeout(function(){

            if(valido){

                q.resolve(num);
            }else{
                q.reject('no se sumar');
            }
        
        },200);
           
    
 
            return q.promise;
     
        };
       
  

    $scope.promise=$scope.sumar(1);

    $scope.promise.then(
        function(valor){
        console.log("promesa cumplida");
        $scope.miVar=valor;
    },
    function(error){
        console.error(error);
        $scope.miVar="ERROR !!!!!"; 
    });

}]);