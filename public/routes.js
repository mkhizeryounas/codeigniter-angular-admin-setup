app.config(function($stateProvider,$urlRouterProvider) {
  $stateProvider
  .state('home', {
    templateUrl: base_url+'public/partials/home.html',
    url: '/home',
    controller: "homeCtrl",
    data : {
      authLevel: "admin"
    }
  })
  .state('default', {
    templateUrl: base_url+'public/partials/home.html',
    url: '/',
    controller: "homeCtrl",
    data : {
      authLevel: "admin"
    }
  })
  .state('test', {
    templateUrl: base_url+'public/partials/test.html',
    url: '/test',
    controller: "homeCtrl",
    data : {
      authLevel: "admin"
    }
  })


  $urlRouterProvider.otherwise('/home');
});