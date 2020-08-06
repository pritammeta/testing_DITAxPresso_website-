var myApp = angular.module("Metapercept", ['ui.router', 'angular-google-analytics', 'angular-loading-bar','duScroll','angular-owl-carousel-2']);

myApp.config(['$stateProvider', '$urlRouterProvider', 'AnalyticsProvider', 'cfpLoadingBarProvider', function ($stateProvider, $urlRouterProvider, AnalyticsProvider, cfpLoadingBarProvider) {

  cfpLoadingBarProvider.includeSpinner = true;
  cfpLoadingBarProvider.includeBar = true;
  cfpLoadingBarProvider.latencyThreshold = 100;

  $stateProvider
    .state('main', {
      views: {
        'header': {
          templateUrl: 'templates/nav.html'
        },
        'content': {
          template: '<div ui-view></div>'
        },
        'footer': {
          templateUrl: 'templates/footer.html'
        }
      }
    })
    .state('main.home', {
      url: '/home',
      templateUrl: 'templates/DITAxPresso.html'
    })
          // DITAxPresso
    .state('main.DITAxPresso', {
      url: '/DITAxPresso',
      templateUrl: 'templates/DITAxPresso.html'
    })
          //About
    .state('main.about', {
      url: '/about',
      templateUrl: 'templates/about-2.html'
    })
       // Contact-Us
    .state('main.contactus', {
      url: '/contactus',
      templateUrl: 'templates/contact-us.html',
      controller: 'contactusController'
    })    
        // Products
    .state('main.products', {
      url: '/products',
      templateUrl: 'templates/products.html'
    })
    // DITAxPresso FAQs
    .state('main.DITAxPresso_faqs', {
      url: '/DITAxPresso/FAQ',
      templateUrl: 'templates/DITAxPresso-faqs.html'
    });

  $urlRouterProvider.otherwise('/home');
  // Add configuration code as desired
  AnalyticsProvider.setAccount('UA-165048950-1'); //UU-XXXXXXX-X should be your tracking code
}])

