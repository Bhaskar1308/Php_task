<?php
include '../db.php';
$id=(int)$_POST['id'];
// remove file
$r=$conn->query("SELECT photo FROM people WHERE id=$id")->fetch_assoc();
if($r && $r['photo']) unlink("../uploads/".$r['photo']);
$conn->query("DELETE FROM people WHERE id=$id");
