var myApp= angular.module("myApp",[]);

myApp.controller("myController",function($scope,$http){

    $scope.insertData= function(){
        $http.post("insert.php",
        {
            'fname':$scope.fname,
            'lname':$scope.lname,
            'phoneNo': $scope.phoneNo,
            'email': $scope.email,
            'ID': $scope.ID,
            'school': $scope.school,
            'password': $scope.password
        })
        .then(function(data, status, headers, config){
            console.log("Data inserted succesfully");
            console.log($scope.fname);
            console.log($scope.lname);
            console.log($scope.phoneNo);
            console.log($scope.email);
            console.log($scope.ID);
            console.log($scope.school);
            console.log($scope.password);
        });
    }
})