<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/utils.php';

/**
 * Retrieve all students from the database.
 *
 * @return array An array of associative arrays representing the students.
 *               Each student is represented as an associative array with
 *               the following keys: id, nom, prenom, email, date_naissance.
 *               If the query fails, an empty array is returned.
 */
function get_all_players()
{
  $conn = db_connect();
  $query = "SELECT 
    players.id AS player_id,
    players.name AS player_name,
    players.photo_path AS player_photo,
    players.nationality AS player_nationality,
    players.flag_path AS nationality_flag,
    players.club AS player_club,
    players.logo_path AS club_logo,
    players.position AS player_position,
    players.rating AS player_rating,
    players.created_at AS created_timestamp,
    
    goalkeeper_attributes.diving AS gk_diving,
    goalkeeper_attributes.handling AS gk_handling,
    goalkeeper_attributes.kicking AS gk_kicking,
    goalkeeper_attributes.reflexes AS gk_reflexes,
    goalkeeper_attributes.speed AS gk_speed,
    goalkeeper_attributes.positioning AS gk_positioning,
    
    outfield_attributes.shooting AS of_shooting,
    outfield_attributes.pace AS of_pace,
    outfield_attributes.dribbling AS of_dribbling,
    outfield_attributes.defending AS of_defending,
    outfield_attributes.physical AS of_physical,
    outfield_attributes.passing AS of_passing
FROM 
    players 
LEFT JOIN 
    goalkeeper_attributes ON players.id = goalkeeper_attributes.player_id
LEFT JOIN 
    outfield_attributes ON players.id = outfield_attributes.player_id
    ORDER BY 
    players.id;
";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    error_log("Erreur de requête : " . mysqli_error($conn));
    db_close($conn);
    return [];
  }

  $players = mysqli_fetch_all($result, MYSQLI_ASSOC);
  db_close($conn);

  return $players;
}

/**
 * Retrieve a student's details from the database by their ID.
 *
 * @param int $id The ID of the student to fetch.
 * @return array|false An associative array of the student's data if found, 
 *                     false if the student does not exist or on query failure.
 */

function get_players_by_id($id)
{
  $conn = db_connect();
  $query = "SELECT * FROM players WHERE id = ?";
  $stmt = prepare_sql_query($conn, $query, [$id]);

  if (!$stmt) {
    db_close($conn);
    return false;
  }

  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $player = mysqli_fetch_assoc($result);

  mysqli_stmt_close($stmt);
  db_close($conn);

  return $player;
}
