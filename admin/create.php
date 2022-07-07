<?php 

    if (isset($_POST['upload'])) 
    {

        $pdo = require_once '../conn.php';
        $bookName = $_POST['bookName'];
        $level = $_POST['level'];
        $courseCode = $_POST['courseCode'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $fileLocation = $_POST['fileLocation'];
        $downloads = 0;
        $likes = 0;
        $errors = "";

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {

            $tableName = "";

            function lvl_check ($data)
            {

                if ($data == "100")
                {
                    $tableName = "levelonebooks";
                    return $tableName;
                }


                if ($data == "200")
                {
                    $tableName = "leveltwobooks";
                    return $tableName;
                }


                if ($data == "300")
                {
                    $tableName = "levelthreebooks";
                    return $tableName;
                }


                if ($data == "400")
                {
                    $tableName = "levelfourbooks";
                    return $tableName;
                }


                if ($data == "500")
                {
                    $tableName = "levelfivebooks";
                    return $tableName;
                }

            }


            $lvl = $_POST["level"];
            $tableName = lvl_check($lvl);


            $stmt = $pdo->prepare("SELECT * FROM `$tableName`");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (empty($errors)) 
                {
                    $stmt = $pdo->prepare("INSERT INTO $tableName (bookName, level, courseCode, description, author,
                            fileLocation, downloads, likes, uploadDate)
                            VALUES (:bookName, :level, :courseCode, :description, :author, :fileLocation, :downloads, :likes, :uploadDate)");
                    $stmt->bindValue(':bookName', $bookName);
                    $stmt->bindValue(':level', $level);
                    $stmt->bindValue(':courseCode', $courseCode);
                    $stmt->bindValue(':description', $description);
                    $stmt->bindValue(':author', $author);
                    $stmt->bindValue(':fileLocation', $fileLocation);
                    $stmt->bindValue(':downloads', $downloads);
                    $stmt->bindValue(':likes', $likes);
                    $stmt->bindValue(':uploadDate', date('Y-m-d H:i:s'));
                    $stmt->execute();
                    header('Location: upload-page.php?success');
                }
        }
        
    }

?>