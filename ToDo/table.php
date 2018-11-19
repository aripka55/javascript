<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "andrew", "southhills#", "andrew");

$result = $conn->query("SELECT listid, completed FROM todolist");

?>