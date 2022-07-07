<?php

$pdo = require_once '../conn.php';

$tableName = $_POST['tableName'];
$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location: uploaded2.php');
    exit;
}

$stmt = $pdo->prepare("DELETE FROM $tableName WHERE id = :id");
$stmt->bindValue(':id', $id);
$stmt->execute();

header('Location: uploaded2.php');

?>