<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Angular-Laravel Authentication</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body ng-app="app">

        <div class="container">
            <div ui-view></div>
        </div>        
        <script>
            var API_URL = 'http://52.70.71.125/laravel2/public/api/';
        </script>
    </body>

    <!-- Application Dependencies -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/build/angular-ui-router.js"></script>
    <script src="node_modules/satellizer/satellizer.js"></script>
    <script src="//code.angularjs.org/1.3.0-rc.1/angular-resource.min.js"></script>
    <script src="http://52.70.71.125/ci_angular/bower_components/angular-filter/dist/angular-filter.js"></script>
    <script src="http://52.70.71.125/ci_angular/bower_components/angularUtils-pagination/dirPagination.js"></script>
    <script src="scripts/multi-select.js"></script>
<!--    <script src="scripts/soapclient.js"></script>
    <script src="scripts/angular.soap.js"></script>-->

    <!-- Application Scripts -->
    <script src="scripts/app.js"></script>
    <script src="scripts/controllers/authController.js"></script>
    <script src="scripts/controllers/userController.js"></script>
    <script src="scripts/controllers/speakerController.js"></script>
    <script src="scripts/controllers/profileController.js"></script>
    
    
    <script src="scripts/services.js"></script>
    
</html>
