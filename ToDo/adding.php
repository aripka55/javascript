<?php
require_once 'dbconnection.php'; 
if(isset($_GET['listid'])){
    $task = $_GET['listid'];
    $status = "0";
    $created = time();

    $query="INSERT INTO listid (listid,status)  VALUES ('$listid', '$status',)";

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $result = $mysqli->affected_rows;

    echo $json_response = json_encode($result);
}
?>