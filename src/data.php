<?php
header("Content-Type: application/json");

$host = "localhost";
$username = "root";
$password = "";
$dbname = "team_foot";

$conn = new mysqli($host, $username, $password, $dbname);

$player = "SELECT name, photo, photo_path, nationality, flag_path, club, logo_path, position, rating, created_at FROM players";
$goalkeeperAttributes = "SELECT player_id, diving, handling, kicking, reflexes, speed, positioning FROM goalkeeper_attributes";
$outfieldAttributes = "SELECT player_id, shooting, pace, dribbling, defending, physical, passing FROM outfield_attributes";

$resultPlayer = $conn->query($sql);
$resultGoalkeeperAttributes = $conn->query($sql);
$resultOutfieldAttributes = $conn->query($sql);

$players = [];
$playersGoalkeeperAttributes = [];
$playersOutfieldAttributes = [];

while ($row = $result->fetch_assoc()) {
  $players[] = $row;
}

echo json_encode($playersGoalkeeperAttributes);
while ($row = $result->fetch_assoc()) {
  $playersGoalkeeperAttributes[] = $row;
}

echo json_encode($playersOutfieldAttributes);
while ($row = $result->fetch_assoc()) {
  $playersOutfieldAttributes[] = $row;
}

echo json_encode($players);

$conn->close();
