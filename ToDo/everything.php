<?php
// Deleting the Task
require('dbconnection.php');

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_POST = json_decode(file_get_contents('php://input'), true);
$deletingTask = $_POST['tasks'];
$deleting_id = $_POST['listid'];

$sql = "DELETE FROM todolist WHERE list_id = ('$deleteing_id')";

$result = $conn->query($sql);
?>

<?php
// Getting the Task
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

<?php
// List of the Task
require('dbconnection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$_POST = json_decode(file_get_contents('php://input'), true);
$sql = "SELECT * FROM todolist";
$result = $conn->query($sql);
?>