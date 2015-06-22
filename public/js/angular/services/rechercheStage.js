app.factory('Stages', function($http, $q) {
    var factory = {
        news : false,

        getStages : function(){
            var deferred = $q.defer();

            $http.get(window.location.href.replace('#',''))
                .success(function(data, status) {
                    factory.news = data;
                    deferred.resolve(factory.news);
                }).error(function(data, status) {
                    deferred.reject('Erreur requete Ajax');
                });
            return deferred.promise;
        }
    };
    return factory;
});