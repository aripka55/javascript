app.controller("myCtrl", function($scope, $http){
    //$scope.firstName = "Andrew";
    //$scope.lastName = "Ripka";

    $http.get("table.php").then(function (response) {
        $scope.myData = response.data.records;
    });
});