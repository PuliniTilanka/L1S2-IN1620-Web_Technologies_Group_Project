var payment = angular.module("payment", ["ngRoute"]);

payment.config(function ($routeProvider) {
    $routeProvider
        .when("/visa", {
            templateUrl: "paymentTemplates/payment_form.html"
        })
        .when("/master", {
            templateUrl: "paymentTemplates/payment_form.html"
        })
        .when("/paypal",{
            templateUrl:"paymentTemplates/paypal_payment.html"
        })
});