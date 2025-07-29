<?php
$mysqli = new mysqli("mysql.hostinger.com", "u852669780_pathfinder", "1973@Box2", "u852669780_pathfinder");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
?>
