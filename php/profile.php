<?php
require_once('db.php');
$id = $_SESSION['user']['id']; 

$sql = "SELECT * FROM users WHERE id= :id";

$stmt = $conn->prepare($sql);
$stmt -> bindValue(":id", $id);
$stmt->execute();
$user = $stmt->fetch();