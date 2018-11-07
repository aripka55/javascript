<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "andrew", "southhills#", "andrew");

$result = $conn->query("SELECT first_name, last_name, city FROM angular_people");
$output = "";

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($output != "") {$output .= ",";}
    $output .= '{"firstName":"'  . $row["first_name"] . '",';
    $output .= '"lastName":"'   . $row["last_name"]  . '",';
    $output .= '"city":"'. $row["city"]  . '"}';
}

$output = '{"records":[' .$output.']}';
$conn->close();

echo($output);
?>