<?php
header("Content-Type: application/json");


$host = "localhost";     
$username = "root";      
$password = "";          
$dbname = "team_foot";   


$conn = new mysqli($host, $username, $password, $dbname);



$sql = "SELECT name, photo, position, nationality, flag, logo, club, rating, pace, shooting, passing, dribbling, defending, physical FROM players";
$result = $conn->query($sql);

$players = [];
    while ($row = $result->fetch_assoc()) {
        $players[] = $row;
    }

echo json_encode($players);

$conn->close();
?>