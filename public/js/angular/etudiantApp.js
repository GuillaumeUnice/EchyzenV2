var app = angular.module('EtudiantApp', ['ngRoute', 'angularUtils.directives.dirPagination', 'isteven-multi-select']);

app.config(function($routeProvider){

    $routeProvider.when('/recherche-stage', {templateUrl : 'etudiant/views/angular.etudiant.recherche_offre_stage', controller: 'RechercheStageCtrl'})
        .otherwise({redirectTo: '/'});
});