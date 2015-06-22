var app = angular.module('EntrepriseApp', ['ngRoute', 'angularUtils.directives.dirPagination', 'isteven-multi-select']);

app.config(function($routeProvider){
    $routeProvider.when('/recherche-etudiant', {templateUrl : 'entreprise/views/angular.entreprise.recherche_etudiant', controller: 'RechercheEtudiantCtrl'})
        .otherwise({redirectTo: '/'});
});