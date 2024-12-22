<?php

$conn = mysqli_connect('localhost','root','','football_players');



  $idGet = $_GET['id'];

  $queryGet = "DELETE FROM players WHERE id =".$idGet;

 $resDelete = mysqli_query($conn, $queryGet);
 if ($resDelete) {
  header('location:../index.php');
 }

