<?php 

require_once "conn.php";

$id = $_POST['id'];
$likes = $_POST['likeCounter'];

$stmt = $pdo->prepare("UPDATE `leveltwobooks` SET likes=:likes WHERE id=:id");
$stmt->bindValue(":id", $id);
$stmt->bindValue(":likes", $likes);
$stmt->execute();

?>