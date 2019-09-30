// var app = angular.module( "app", [ ] );
app.config( function( $routeProvider ){

  $routeProvider
    .when('/',{
        templateUrl: 'parciales/home.html'
    })
    .when('/alumnos',{
        templateUrl: 'parciales/alumnos.html',
        controller:  'alumnosCtrl'
    })
    .when('/profesores',{
        templateUrl: 'parciales/profesores.html'
    })
    .otherwise({
      redirectTo: '/'
    })

})
