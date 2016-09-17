<?php
include 'config/config.php';
$dbHost = 'localhost';
$dbUsername = DB_USER;
$dbPassword = DB_PASS;
$dbName = DB_NAME;
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM airport WHERE airport LIKE '%".$searchTerm."%' ORDER BY airport ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['airport'];
}
//return json data
echo json_encode($data);
?>