app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.when('', '/');

    $stateProvider

        .state('index', {
            url: "/",
            templateUrl: "modules/Index/index.view.html",
            controller: "IndexController",
            data: {
                requireLogin: false
            }
        })
}]);