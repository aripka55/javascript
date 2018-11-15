app.controller("todoCtrlctrl", function($scope, $http) {

    $http.get("todolistDatabase.php").then(function (response) {
      $scope.myPHPData = response.data.records;
    })
});