app.controller("myCtrl", function($scope, $http){
    $scope.firstName = "Andrew";
    $scope.lastName = "Ripka";

    $http.get("json_sample.html").then(function (response) {
        $scope.myData = response.data.records;
    });
});