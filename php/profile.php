<?php
require_once('db.php');

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();