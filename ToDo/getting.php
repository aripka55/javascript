<?php
require('dbconnection.php'); 

if(isset($_GET['task'])){
    $task = $_GET['task'];
    $status = "0";
    $created = time();

    $query="INSERT INTO todolist(tasks,status)  VALUES ('$tasks', '$status', '$creat')";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $result = $mysqli->affected_rows;
    echo $json_response = json_encode($result);
}
?>