<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="initial-scale=1,maximum-scale=1,user-scalable=no,width=device-width, height=device-height">
    <title>首页</title>
    <link href="{{asset('css/index.css')}}" rel="stylesheet">
    <link href="{{asset('css/ionic-v1.3.3/css/ionic.css')}}" rel="stylesheet">
    <script src="{{asset('css/ionic-v1.3.3/js/ionic.bundle.js')}}"></script>
    <script type="text/javascript">
        angular.module('ionicApp', ['ionic'])
            .controller('SlideController', function ($scope) {
                $scope.myActiveSlide = 1;
            })
    </script>
</head>

<body ng-app="ionicApp" animation="slide-left-right-ios7" ng-controller="SlideController">

<ion-slide-box active-slide="myActiveSlide">
    <ion-slide>
        <div class="box4 blue"><img src="{{asset('img/lunbo1.jpeg')}}"></div>
    </ion-slide>
    <ion-slide>
        <div class="box4 blue"><img src="{{asset('img/lunbo2.jpeg')}}"></div>
    </ion-slide>
    <ion-slide>
        <div class="box4 blue"><img src="{{asset('img/lunbo3.jpeg')}}"></div>
    </ion-slide>
</ion-slide-box>
<a href="{{URL('model')}}">
    <div class="start">开启旅程</div>
</a>
</body>
</html>