app.controller('alumnosCtrl', ['$scope','$http', function($scope,$http){
	
	$scope.setActive("mAlumnos");

	$scope.alumnos={};
	$http.get('php/servicios/alumnos.listado.php').success(function(data){
		$scope.alumnos=data;
		$scope.posicion=5;
	});

	$scope.siguientes=function(){
		if($scope.alumnos.length>$scope.posicion){
			$scope.posicion+=5;
		}
	}

	$scope.atras=function(){
		if($scope.posicion>5){
			$scope.posicion-=5;
		}
	}
}]);
