<?php 

require_once '../conn.php';

// database connection
$pdo = $pdo;

if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE email='$email'");
    $stmt->execute();


    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (isset($results))
    {
        if ($passwd == $results[0]['password'])
        {
            header("location: dashboard.php");
        }
    }

}



echo "<pre>";
var_dump($results);
echo "</pre>";


?>