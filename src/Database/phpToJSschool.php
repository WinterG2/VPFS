<?php
require_once('connection.php');
header('Content-Type: application/json');

$sql = "SELECT name FROM school";


$result = $conn->query($sql);


$rows = $result->fetch_All();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);
?>