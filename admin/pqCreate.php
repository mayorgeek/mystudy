<?php 

    if (isset($_POST['upload'])) 
    {

        $pdo = require_once '../conn.php';
        $pqName = $_POST['pqName'];
        $level = $_POST['level'];
        $courseCode = $_POST['courseCode'];
        $description = $_POST['description'];
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
                    $tableName = "pqlevelone";
                    return $tableName;
                }


                if ($data == "200")
                {
                    $tableName = "pqleveltwo";
                    return $tableName;
                }


                if ($data == "300")
                {
                    $tableName = "pqlevelthree";
                    return $tableName;
                }


                if ($data == "400")
                {
                    $tableName = "pqlevelfour";
                    return $tableName;
                }


                if ($data == "500")
                {
                    $tableName = "pqlevelfive";
                    return $tableName;
                }

                return "Syntax error!";
            }


            $lvl = $_POST["level"];
            $tableName = lvl_check($lvl);


            $stmt = $pdo->prepare("SELECT * FROM `$tableName`");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (empty($errors)) 
                {
                    $stmt = $pdo->prepare("INSERT INTO $tableName (pqName, level, courseCode, description, 
                    fileLocation, downloads, likes, uploadDate)
                            VALUES (:pqName, :level, :courseCode, :description, :fileLocation, :downloads, :likes, :uploadDate)");
                    $stmt->bindValue(':pqName', $pqName);
                    $stmt->bindValue(':level', $level);
                    $stmt->bindValue(':courseCode', $courseCode);
                    $stmt->bindValue(':description', $description);
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