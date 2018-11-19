<?php
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