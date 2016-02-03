@extends('general.public')


@section('script')
    <!--<script src="{{-- asset('/js/laroute.js') --}}"></script>-->

    <script>
          function regexId() {
            var str = "<img alt='' src='http://api.com/images/UID' /><br/>Some plain text<br/><a href='http://www.google.com'>http://www.google.com</a>";

            var regex = /<img.*?src='(.*?)'/;
            var src = regex.exec(str)[1];
            return src;
          }

    </script>
    <!-- Angular JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-route.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-resource.min.js"></script>
    <!--[if lte IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Base64/0.3.0/base64.min.js"></script>
    <![endif]-->
    <script src="//cdn.jsdelivr.net/satellizer/0.12.5/satellizer.min.js"></script>

    <script>



        //alert(laroute.url('news.index'));
        var app = angular.module('projectsApp', ['ngRoute', 'ngResource', 'satellizer'], function($interpolateProvider) {
				$interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
        });

        app.config(function($routeProvider){


            $routeProvider.when('/project/:projectId', {templateUrl : 'project/views/project.show', controller: 'ProjectsController'})
                .otherwise({redirectTo: '/'});


        });

        app.directive("ngProjectNav", function(){
          return {
            restrict : 'E',
            templateUrl: 'project/views/project.nav',
            scope : {
              test : '='
            },
            link : function($scope, element, attrs){



var string = '<item id="item1">firstItem</item><item id="item2">secondItem</item>';

var div = document.createElement("div");

div.innerHTML = string; // get the browser to parse the html

var children = div.getElementsByTagName("*");

$scope.reza = [];

for (var i = 0; i < children.length; i++)
{
    //alert(children[i].id);
    $scope.reza[i] = children[i].id;


}

    console.log($scope.reza);


            var str = "<img alt='' src='http://api.com/images/UID' /><br/>Some plain text<br/><a href='http://www.google.com'>http://www.google.com</a>";

             var regex = /<img.*?src='(.*?)'/;
             $scope.getSrcImg = regex.exec(str)[1];
            }
          }
        });


        app.directive("ngProjectComment", function(){
          return {
            restrict : 'E',
            templateUrl: 'project/views/project.comment.show',
            scope : {
              comment : '='
            }
          }
        });

        app.factory('Projects', function($http, $q) {
            var factory = {
                projects : false,
                getProjects : function(){
                    var deferred = $q.defer();

                    $http.get('http://localhost/Echyzen/public/project')
                        .success(function(data, status) {
                            factory.projects = data;
                            deferred.resolve(factory.projects);
                        }).error(function(data, status) {
                            deferred.reject('Erreur requete Ajax');
                        });

                    return deferred.promise;
                },
				getProjectsById : function($id){
                    var deferred = $q.defer();

                    $http.get('http://localhost/Echyzen/public/project/' + $id)
                        .success(function(data, status) {
                            factory.projects = data;
                            deferred.resolve(factory.projects);
                        }).error(function(data, status) {
                            deferred.reject('Erreur requete Ajax');
                        });
                        //alert(laroute.route('news.index'));
                    return deferred.promise;
                }
            };
            return factory;
        });
         app.controller('ProjectCommentsController', function($scope, $routeParams, $resource){
          $scope.retest = 'lol';
          var Comment = $resource('project/' + $routeParams.projectId + '/comment/:id');
          comments = Comment.query();
         });

        app.controller('ProjectsController', function($scope, $routeParams, $http, Projects){
            $scope.teste = $http.get('http://localhost/Echyzen/public/project/1/comment');

            $scope.showProject = function () {
              $scope.foldIsOpen = 'fold-is-open';
              $scope.overflowHidden = 'overflow-hidden';
              $scope.isOpen = 'is-open';
            }

            $scope.hideProject = function() {
              $scope.foldIsOpen = '';
              $scope.overflowHidden = '';
              $scope.isOpen = '';
            }

            $scope.$watch(function () { return $routeParams.projectId; }, function (newVal) {
              if (typeof newVal === 'undefined') {
                $scope.hideProject();
              } else {
                $scope.showProject();
              }
            });



           // alert(laroute.route('project.index'));
           // console.log($routeParams.projectId);
            // recuperation param
            $scope.test = Projects.getProjects().then(function(projects){
              $scope.projects = projects.project;

              console.log(projects.project[0]);
              console.log($scope.projects);
              /*$scope.friendlist = [
                        {'status': 'online',  'name': 'Sébastien'},
                        {'status': 'offline', 'name': 'Marion'},
                        {'status': 'online',  'name': 'Youssef'},
                        {'status': 'offline', 'name': 'Romain'},
                        {'status': 'offline', 'name': 'Laura'},
                        {'status': 'offline', 'name': 'Julien'},
                        {'status': 'online',  'name': 'Marie'}
                    ];

                    console.log($scope.friendlist);*/


            }, function(msg){
                alert(msg);
            });




        });
    </script>
@endsection

@section('body')
    <div id="bandeau"><h1 class="bandeau_titre">Projet</h1><div id="bandeau_centre"></div></div>
    <div ng-app="projectsApp" ng-controller="ProjectsController as projects" >
        @yield('body_content')
    </div>
@endsection
