<?php
include '../db.php';
$id = (int)$_GET['id'];
$row = $conn->query("SELECT * FROM people WHERE id=$id")->fetch_assoc();
echo json_encode($row);
