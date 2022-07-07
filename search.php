<?php 

require_once 'conn.php';

$pdo = $pdo;


if (isset($_POST['searchbtn']))
{
    $query = $_POST['query'];

    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $stmt = $pdo->prepare("SELECT * FROM `levelonebooks` WHERE bookName LIKE %$query%");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

}


?>