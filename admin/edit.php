<?php 

$pdo = require_once "../conn.php";
require_once '../admin/create.php';
require_once 'includes/header1.php';

?>


<title>Edit Page</title>

<?php require_once 'includes/header2.php'; ?>

<?php 
 
$tableName = $_GET['tableName'];
$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: uploaded.php');
    exit;
}


 $stmt = $pdo->prepare("SELECT * FROM $tableName WHERE id=$id");
 $stmt->execute();
 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($rows as $i => $row): ?>

<div class="container-fluid">
    <div class="container">
        <div class="container">
            <form action="update.php" method="post">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Book Name</label>
                    <input name="bookName" type="text" class="form-control" id="bookName"
                        value="<?php $row["bookName"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Level</label>
                    <input name="level" type="text" class="form-control" id="level" value="<?php $row["level"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Course Code</label>
                    <input name="courseCode" type="text" class="form-control" id="courseCode"
                        value="<?php $row["courseCode"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <input name="description" type="text" class="form-control" id="description"
                        value="<?php $row["description"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Author</label>
                    <input name="author" type="text" class="form-control" id="author" value="<?php $row["author"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">File Location</label>
                    <input name="fileLocation" type="text" class="form-control" id="fileLocation"
                        value="<?php $row["fileLocation"] ?>">
                </div>
                <input id="resourceType" name="resourceType" value="book" type="hidden">


        </div>
        <div class="modal-footer">
            <a class="btn btn-danger" href="uploaded.php">Cancel</a>
            <button name="upload" type="submit" class="btn btn-success">Upload</button>
        </div>
        </form>
    </div>
</div>

</div>

<?php endforeach; ?>


<!-- END OF COONTAINER-FLUID -->
</div>


<?php require_once 'includes/footer.php' ?>