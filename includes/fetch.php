<?php
include 'db.php';

function getBooks() {
  global $mysqli;
  return $mysqli->query("SELECT * FROM books ORDER BY created_at DESC");
}

function getPosts() {
  global $mysqli;
  return $mysqli->query("SELECT * FROM posts ORDER BY created_at DESC");
}
?>
