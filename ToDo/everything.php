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

$sql = "DELETE FROM todolist WHERE listid = ('$deleteing_id')";

$result = $conn->query($sql);
?>

<?php
// Getting the Task
require('dbconnection.php'); 

if(isset($_GET['tasks'])){
    $task = $_GET['tasks'];
    $status = "0";
    $created = time();

    $query="INSERT INTO todolist(tasks,status)  VALUES ('$tasks', '$status', '$creating')";
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

<?php
// Updating the list of Tasks
require('dbconnection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_POST = json_decode(file_get_contents('php://input'), true);
$updatingTask = $_POST['tasks'];
$updatingId = $_POST['listid'];

$sql = "UPDATE todolist SET tasks = ('$updatingTask') WHERE listid = ('$updatingId')";

$result = $conn->query($sql);
?>