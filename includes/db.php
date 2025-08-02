<?php
$mysqli = new mysqli("mysql.hostinger.com", "u852669780_pathfinder", "1973@Box2", "u852669780_pathfinder");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function getBooks() {
    global $mysqli;
    $books = [];

    $result = $mysqli->query("SELECT * FROM books ORDER BY created_at DESC");

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }

    return $books;
}
?>