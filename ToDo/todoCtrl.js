app.controller('todoCtrl', function($scope, $http) {
  getTask(); // Loading tasks 
  function getTask(){  

  $http.post("gettask.php").success(function(data){
    $scope.listid = data;
    });
  };

  $scope.addTask = function (task) {
    $http.post("adding.php?listid="+listid).success(function(data){
      getTask();
      $scope.taskInput = "";
      });
    };

  $scope.deleteTask = function (task) {
    if(confirm("Are you sure to delete this line?")){
      $http.post("deletetask.php?taskID="+task).success(function(data){
        getTask();
      });
    }
  };

  $scope.toggleStatus = function(item, status, task) {
    if(status=='2'){status='0';}else{status='2';}
      $http.post("updatetask.php?taskID="+item+"&status="+status).success(function(data){
        getTask();
      });
  };
});