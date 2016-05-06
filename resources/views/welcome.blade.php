<!doctype html>
<html lang="en" ng-app="Shared">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">

    {{--<div ng-include="'modules/Shared/views/common/header.html'"></div>--}}

    <div ui-view id="mainView"></div>

    {{--<div ng-include="'modules/Shared/views/common/footer.html'"></div>--}}

</div>
<script src="components/jquery/jquery.min.js"></script>
<script src="components/bootstrap/js/bootstrap.min.js"></script>
<script src="components/angular/angular.min.js"></script>
<script src="components/angular-ui-router/angular-ui-router.min.js"></script>
<script src="components/angular-ui-bootstrap/ui-bootstrap-custom-0.13.1.js"></script>
<script src="components/angular-ui-utils/ui-utils.min.js"></script>

<script src="app.js"></script>
<script src="config/routes.js"></script>

<script src="modules/Index/index.module.js"></script>
<script src="modules/Index/index.controller.js"></script>
</body>
</html>