<?php
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");

$conn = new msqli("localhost", "andrew", "southhills#", "andrew");

$result = $conn->query("SELECT user_id, first_name, last_name, city FROM angular_people");
$output = "";

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($output != "") {$output .= ",";}
    $output .= '{"First Name":"'  . $row["first_name"] . '",';
    $output .= '"Last Name":"'   . $row["last_name"]        . '",';
    $output .= '"City" "'. $row["city"]     . '"}';
}

$output = '{"Angular People":[' .$output.']}';
$conn->close();

echo($output);
?>