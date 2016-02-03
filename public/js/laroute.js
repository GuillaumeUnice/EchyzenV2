(function () {

    var laroute = (function () {

        var routes = {

            absolute: http://localhost/Echyzen/public/,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"auth\/login\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["POST"],"uri":"auth\/login\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/logout\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/register\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getRegister"},{"host":null,"methods":["POST"],"uri":"auth\/register\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postRegister"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/verify\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getVerify"},{"host":null,"methods":["GET","HEAD","POST","PUT","PATCH","DELETE"],"uri":"auth\/{_missing}","name":null,"action":"App\Http\Controllers\Auth\AuthController@missingMethod"},{"host":null,"methods":["POST"],"uri":"password\/email\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/email\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getReset"},{"host":null,"methods":["POST"],"uri":"password\/reset\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postReset"},{"host":null,"methods":["GET","HEAD","POST","PUT","PATCH","DELETE"],"uri":"password\/{_missing}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@missingMethod"},{"host":null,"methods":["GET","HEAD"],"uri":"verify\/{token}","name":"verify","action":"App\Http\Controllers\Auth\AuthController@getVerify"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"index","action":"App\Http\Controllers\Index\IndexController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":"register","action":"App\Http\Controllers\Auth\AuthController@getRegister"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\AuthController@postRegister"},{"host":null,"methods":["GET","HEAD"],"uri":"news\/test","name":"test","action":"App\Http\Controllers\News\NewsController@getTest"},{"host":null,"methods":["GET","HEAD"],"uri":"news\/create","name":"news_create","action":"App\Http\Controllers\News\NewsController@create"},{"host":null,"methods":["POST"],"uri":"news\/create","name":"news_create","action":"App\Http\Controllers\News\NewsController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"project","name":"project.index","action":"App\Http\Controllers\Project\ProjectController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"project\/{project}","name":"project.show","action":"App\Http\Controllers\Project\ProjectController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"project\/views\/{name}","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/project\/create","name":"admin.project.create","action":"App\Http\Controllers\Project\ProjectController@create"},{"host":null,"methods":["POST"],"uri":"admin\/project","name":"admin.project.store","action":"App\Http\Controllers\Project\ProjectController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/project\/{project}\/edit","name":"admin.project.edit","action":"App\Http\Controllers\Project\ProjectController@edit"},{"host":null,"methods":["PUT"],"uri":"admin\/project\/{project}","name":"admin.project.update","action":"App\Http\Controllers\Project\ProjectController@update"},{"host":null,"methods":["PATCH"],"uri":"admin\/project\/{project}","name":null,"action":"App\Http\Controllers\Project\ProjectController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/project\/{project}","name":"admin.project.destroy","action":"App\Http\Controllers\Project\ProjectController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/project","name":"admin.project.index","action":"App\Http\Controllers\Project\ProjectController@adminIndex"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide","name":"admin.slide.index","action":"App\Http\Controllers\Index\SlideController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/create","name":"admin.slide.create","action":"App\Http\Controllers\Index\SlideController@create"},{"host":null,"methods":["POST"],"uri":"admin\/slide","name":"admin.slide.store","action":"App\Http\Controllers\Index\SlideController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/{slide}","name":"admin.slide.show","action":"App\Http\Controllers\Index\SlideController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/slide\/{slide}\/edit","name":"admin.slide.edit","action":"App\Http\Controllers\Index\SlideController@edit"},{"host":null,"methods":["PUT"],"uri":"admin\/slide\/{slide}","name":"admin.slide.update","action":"App\Http\Controllers\Index\SlideController@update"},{"host":null,"methods":["PATCH"],"uri":"admin\/slide\/{slide}","name":null,"action":"App\Http\Controllers\Index\SlideController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/slide\/{slide}","name":"admin.slide.destroy","action":"App\Http\Controllers\Index\SlideController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"upload_image","name":"upload_image","action":"App\Http\Controllers\Upload\ImageUploadController@getUpload"},{"host":null,"methods":["POST"],"uri":"upload_image","name":null,"action":"App\Http\Controllers\Upload\ImageUploadController@postUpload"},{"host":null,"methods":["GET","HEAD"],"uri":"rubrique","name":"rubrique.index","action":"App\Http\Controllers\rubricController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"rubrique\/create","name":"rubric_create","action":"App\Http\Controllers\rubricController@create"},{"host":null,"methods":["POST"],"uri":"rubrique","name":"rubrique.store","action":"App\Http\Controllers\rubricController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"rubrique\/{rubrique}","name":"rubrique.show","action":"App\Http\Controllers\rubricController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"rubrique\/{rubrique}\/edit","name":"rubrique.edit","action":"App\Http\Controllers\rubricController@edit"},{"host":null,"methods":["PUT"],"uri":"rubrique\/{rubrique}","name":"rubrique.update","action":"App\Http\Controllers\rubricController@update"},{"host":null,"methods":["PATCH"],"uri":"rubrique\/{rubrique}","name":null,"action":"App\Http\Controllers\rubricController@update"},{"host":null,"methods":["DELETE"],"uri":"rubrique\/{rubrique}","name":"rubrique.destroy","action":"App\Http\Controllers\rubricController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"website\/CV","name":"test","action":"App\Http\Controllers\WebsiteController@getCV"},{"host":null,"methods":["GET","HEAD"],"uri":"views\/{name}","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"}],

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

