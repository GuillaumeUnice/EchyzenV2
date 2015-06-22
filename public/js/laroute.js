(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"index","action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/inscription\/{token}","name":"inscription_etudiant","action":"App\Http\Controllers\Auth\AuthController@getEtudiantInscription"},{"host":null,"methods":["POST"],"uri":"etudiant\/inscription\/{token}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postEtudiantInscription"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/inscription","name":"register_entreprise","action":"App\Http\Controllers\Auth\AuthController@getEntrepriseInscription"},{"host":null,"methods":["POST"],"uri":"entreprise\/inscription","name":null,"action":"App\Http\Controllers\Auth\AuthController@postEntrepriseInscription"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/inscription","name":"register_etudiant","action":"App\Http\Controllers\Auth\AuthController@getEtudiantInscription"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/inscription\/{token}","name":"inscription_moderateur","action":"App\Http\Controllers\Auth\AuthController@getModerateurInscription"},{"host":null,"methods":["POST"],"uri":"moderateur\/inscription\/{token}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postModerateurInscription"},{"host":null,"methods":["GET","HEAD"],"uri":"accueil","name":"accueil","action":"App\Http\Controllers\Auth\AuthController@getAccueil"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/invitation-etudiant","name":"invitation_etudiant","action":"App\Http\Controllers\Auth\InvitationController@getInvitationEtudiant"},{"host":null,"methods":["POST"],"uri":"moderateur\/invitation-etudiant","name":null,"action":"App\Http\Controllers\Auth\InvitationController@postInvitationEtudiant"},{"host":null,"methods":["POST"],"uri":"moderateur\/invitation-etudiant-multiple","name":"invitation-etudiant-multiple","action":"App\Http\Controllers\Auth\InvitationController@postInvitationEtudiantMultiple"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/validation-entreprise","name":"validation_entreprise","action":"App\Http\Controllers\Moderateur\EntrepriseValidationController@getEntrepriseValidation"},{"host":null,"methods":["POST"],"uri":"moderateur\/validation-entreprise","name":null,"action":"App\Http\Controllers\Moderateur\EntrepriseValidationController@postEntrepriseValidation"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/validation-offrestage","name":"validation_offrestage","action":"App\Http\Controllers\Moderateur\ModerateurValidationOffreStageController@getOffreStage"},{"host":null,"methods":["POST"],"uri":"moderateur\/validation-offrestage","name":null,"action":"App\Http\Controllers\Moderateur\ModerateurValidationOffreStageController@postOffreStage"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/offre-stage","name":"offre-stage-moderateur","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/offre-stage\/create","name":"moderateur.offre-stage.create","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@create"},{"host":null,"methods":["POST"],"uri":"moderateur\/offre-stage","name":"moderateur.offre-stage.store","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/offre-stage\/{offre_stage}","name":"moderateur.offre-stage.show","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/offre-stage\/{offre_stage}\/edit","name":"moderateur.offre-stage.edit","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@edit"},{"host":null,"methods":["PUT"],"uri":"moderateur\/offre-stage\/{offre_stage}","name":"moderateur.offre-stage.update","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@update"},{"host":null,"methods":["PATCH"],"uri":"moderateur\/offre-stage\/{offre_stage}","name":null,"action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@update"},{"host":null,"methods":["DELETE"],"uri":"moderateur\/offre-stage\/{offre_stage}","name":"moderateur.offre-stage.destroy","action":"App\Http\Controllers\Moderateur\ModerateurOffreStageController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/accueil","name":"accueil-moderateur","action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"moderateur\/promotions","name":"moderateur-promotions","action":"App\Http\Controllers\Moderateur\ModerateurPromotionsController@getPromotions"},{"host":null,"methods":["POST"],"uri":"moderateur\/promotions","name":"moderateur-promotions","action":"App\Http\Controllers\Moderateur\ModerateurPromotionsController@postPromotions"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/views\/{name}","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/recherche-stage","name":"recherche-stage-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantRechercheStageController@getAllStage"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/accueil","name":"accueil-etudiant","action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/profil","name":"profil-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantProfilController@getEtudiantProfil"},{"host":null,"methods":["POST"],"uri":"etudiant\/profil","name":"profil-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantProfilController@postEtudiantProfil"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/competence","name":"competence-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantCompetenceController@getCompetence"},{"host":null,"methods":["POST"],"uri":"etudiant\/competence","name":"competence-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantCompetenceController@postCompetence"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/cv","name":"cv-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantCVController@getEtudiantCV"},{"host":null,"methods":["POST"],"uri":"etudiant\/cv","name":"cv-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantCVController@postEtudiantCV"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/historique-feedback","name":"historique-feedback","action":"App\Http\Controllers\Etudiant\EtudiantFeedBackController@getHistoriqueStage"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/historique-feedback\/{id_stage}","name":"historique-feedback-detail","action":"App\Http\Controllers\Etudiant\EtudiantFeedBackController@getFeedbackStage"},{"host":null,"methods":["POST"],"uri":"etudiant\/historique-feedback\/{id_stage}","name":"historique-feedback-update","action":"App\Http\Controllers\Etudiant\EtudiantFeedBackController@updateFeedback"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/historique-feedback\/{id_stage}\/create","name":"historique-feedback-ajouter","action":"App\Http\Controllers\Etudiant\EtudiantFeedBackController@create"},{"host":null,"methods":["POST"],"uri":"etudiant\/historique-feedback\/{id_stage}\/create","name":"historique-feedback-envoyer","action":"App\Http\Controllers\Etudiant\EtudiantFeedBackController@postFeedbackStage"},{"host":null,"methods":["DELETE"],"uri":"etudiant\/historique-feedback\/{id_feedback}\/delete","name":"historique-feedback-supprimer","action":"App\Http\Controllers\Etudiant\EtudiantFeedBackController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/offre-stage","name":"offre-stage-etudiant","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/offre-stage\/create","name":"etudiant.offre-stage.create","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@create"},{"host":null,"methods":["POST"],"uri":"etudiant\/offre-stage","name":"etudiant.offre-stage.store","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/offre-stage\/{offre_stage}","name":"etudiant.offre-stage.show","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/offre-stage\/{offre_stage}\/edit","name":"etudiant.offre-stage.edit","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@edit"},{"host":null,"methods":["PUT"],"uri":"etudiant\/offre-stage\/{offre_stage}","name":"etudiant.offre-stage.update","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@update"},{"host":null,"methods":["PATCH"],"uri":"etudiant\/offre-stage\/{offre_stage}","name":null,"action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@update"},{"host":null,"methods":["DELETE"],"uri":"etudiant\/offre-stage\/{offre_stage}","name":"etudiant.offre-stage.destroy","action":"App\Http\Controllers\Etudiant\EtudiantOffreStageController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/recherche-postuler","name":"recherche-postuler","action":"App\Http\Controllers\Etudiant\EtudiantRecherchePostuler@getListOffreStages"},{"host":null,"methods":["GET","HEAD"],"uri":"etudiant\/recherche-postuler\/{id_offre}","name":"postuler","action":"App\Http\Controllers\Etudiant\EtudiantRecherchePostuler@postuler"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/accueil","name":"accueil-entreprise","action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/profil","name":"profil-entreprise","action":"App\Http\Controllers\Entreprise\EntrepriseProfilController@getEntrepriseProfil"},{"host":null,"methods":["POST"],"uri":"entreprise\/profil","name":"profil-entreprise","action":"App\Http\Controllers\Entreprise\EntrepriseProfilController@postEntrepriseProfil"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/offre-stage","name":"offre-stage-entreprise","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/offre-stage\/create","name":"entreprise.offre-stage.create","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@create"},{"host":null,"methods":["POST"],"uri":"entreprise\/offre-stage","name":"entreprise.offre-stage.store","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/offre-stage\/{offre_stage}","name":"entreprise.offre-stage.show","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"entreprise\/offre-stage\/{offre_stage}\/edit","name":"entreprise.offre-stage.edit","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@edit"},{"host":null,"methods":["PUT"],"uri":"entreprise\/offre-stage\/{offre_stage}","name":"entreprise.offre-stage.update","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@update"},{"host":null,"methods":["PATCH"],"uri":"entreprise\/offre-stage\/{offre_stage}","name":null,"action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@update"},{"host":null,"methods":["DELETE"],"uri":"entreprise\/offre-stage\/{offre_stage}","name":"entreprise.offre-stage.destroy","action":"App\Http\Controllers\Entreprise\EntrepriseOffreStageController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"administrateur\/accueil","name":"accueil-administrateur","action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"administrateur\/invitation-moderateur","name":"invitation_moderateur","action":"App\Http\Controllers\Auth\InvitationController@getInvitationModerateur"},{"host":null,"methods":["POST"],"uri":"administrateur\/invitation-moderateur","name":null,"action":"App\Http\Controllers\Auth\InvitationController@postInvitationModerateur"},{"host":null,"methods":["POST"],"uri":"administrateur\/invitation-moderateur-multiple","name":"invitation-moderateur-multiple","action":"App\Http\Controllers\Auth\InvitationController@postInvitationModerateurMultiple"},{"host":null,"methods":["GET","HEAD"],"uri":"administrateur\/identite-ecole","name":"admin_identite_ecole_get","action":"App\Http\Controllers\Admin\IdentiteEcoleController@getIdentite"},{"host":null,"methods":["POST"],"uri":"administrateur\/identite-ecole\/logo","name":"admin_identite_ecole_logo_post","action":"App\Http\Controllers\Admin\IdentiteEcoleController@postLogo"},{"host":null,"methods":["DELETE"],"uri":"administrateur\/identite-ecole\/logo\/delete","name":"admin_identite_ecole_logo_delete","action":"App\Http\Controllers\Admin\IdentiteEcoleController@deleteLogo"},{"host":null,"methods":["POST"],"uri":"administrateur\/identite-ecole\/nom","name":"admin_identite_ecole_nom_post","action":"App\Http\Controllers\Admin\IdentiteEcoleController@postNom"},{"host":null,"methods":["DELETE"],"uri":"administrateur\/identite-ecole\/nom\/delete","name":"admin_identite_ecole_nom_delete","action":"App\Http\Controllers\Admin\IdentiteEcoleController@deleteNom"},{"host":null,"methods":["GET","HEAD"],"uri":"administrateur\/promotion","name":"admin_promotion_get","action":"App\Http\Controllers\Admin\PromotionEcoleController@read"},{"host":null,"methods":["POST"],"uri":"administrateur\/promotion","name":"admin_promotion_post","action":"App\Http\Controllers\Admin\PromotionEcoleController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"administrateur\/promotion\/delete\/{id}","name":"admin_promotion_delete","action":"App\Http\Controllers\Admin\PromotionEcoleController@delete"},{"host":null,"methods":["POST"],"uri":"administrateur\/promotion\/update\/{id}","name":"admin_promotion_update","action":"App\Http\Controllers\Admin\PromotionEcoleController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"administrateur\/specialite","name":"admin_specialite_read","action":"App\Http\Controllers\Admin\SpecialitesEcoleController@read"},{"host":null,"methods":["POST"],"uri":"administrateur\/specialite","name":"admin_specialite_create","action":"App\Http\Controllers\Admin\SpecialitesEcoleController@create"},{"host":null,"methods":["PUT"],"uri":"administrateur\/specialite\/{id}","name":"admin_specialite_update","action":"App\Http\Controllers\Admin\SpecialitesEcoleController@update"},{"host":null,"methods":["DELETE"],"uri":"administrateur\/specialite\/{id}","name":"admin_specialite_delete","action":"App\Http\Controllers\Admin\SpecialitesEcoleController@delete"},{"host":null,"methods":["DELETE"],"uri":"administrateur\/specialite\/{spe_id}\/{promo_id}","name":"admin_specialite_promotion_delete","action":"App\Http\Controllers\Admin\SpecialitesEcoleController@deletePromotion"},{"host":null,"methods":["GET","HEAD"],"uri":"home","name":null,"action":"App\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/login\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/etudiant-inscription\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getEtudiantInscription"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/moderateur-inscription\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getModerateurInscription"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/entreprise-inscription\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getEntrepriseInscription"},{"host":null,"methods":["POST"],"uri":"auth\/entreprise-inscription\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postEntrepriseInscription"},{"host":null,"methods":["POST"],"uri":"auth\/etudiant-inscription\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postEtudiantInscription"},{"host":null,"methods":["POST"],"uri":"auth\/moderateur-inscription\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postModerateurInscription"},{"host":null,"methods":["POST"],"uri":"auth\/login\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/logout\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/accueil\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\AuthController@getAccueil"},{"host":null,"methods":["GET","HEAD","POST","PUT","PATCH","DELETE"],"uri":"auth\/{_missing}","name":null,"action":"App\Http\Controllers\Auth\AuthController@missingMethod"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/email\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getEmail"},{"host":null,"methods":["POST"],"uri":"password\/email\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getReset"},{"host":null,"methods":["POST"],"uri":"password\/reset\/{one?}\/{two?}\/{three?}\/{four?}\/{five?}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postReset"},{"host":null,"methods":["GET","HEAD","POST","PUT","PATCH","DELETE"],"uri":"password\/{_missing}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@missingMethod"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"}],

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

