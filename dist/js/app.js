var pluss = angular.module('navegacion', ['ngRoute']);

pluss.config(["$routeProvider", function ($routeProvider) {
    $routeProvider.when("/", {
        templateUrl: "plantillas/inicio.html"
    })
        .when("/cli-nue", {
            templateUrl: "plantillas/cli-nue.html"
        })
        .when("/cli-adi", {
            templateUrl: "plantillas/cli-adi.html"
        })
        .when("/cli-det", {
            templateUrl: "plantillas/cli-det.html"
        })
        .when("/equ-ing", {
            templateUrl: "plantillas/equ-ing.html"
        })
        .when("/equ-sal", {
            templateUrl: "plantillas/equ-sal.html"
        })
        .when("/equ-inv", {
            templateUrl: "plantillas/equ-inv.html"
        })
        .when("/mat-ing", {
            templateUrl: "plantillas/404.html"
        })
        .when("/mat-sal", {
            templateUrl: "plantillas/404.html"
        })
        .when("/mat-inv", {
            templateUrl: "plantillas/404.html"
        })
        .when("/cot", {
            templateUrl: "plantillas/cotizacion.html"
        })
        .when("/sop-nue", {
            templateUrl: "plantillas/404.html"
        })
        .when("/sop-con", {
            templateUrl: "plantillas/404.html"
        })
        .when("/sop-det", {
            templateUrl: "plantillas/404.html"
        })
}])