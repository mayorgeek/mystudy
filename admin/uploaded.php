<?php require_once '../conn.php' ?>
<?php require_once 'includes/header1.php' ?>

<title>Upload Page</title>

<?php require_once 'includes/header2.php' ?>
<?php 

$pdo = $pdo;

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

$lvl = $_GET["lvl"];
$tableName = lvl_check($lvl);


$stmt = $pdo->prepare("SELECT * FROM `$tableName`");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 mr-5">Upload Books</h1>
        <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm" data-toggle="modal"
            data-target="#exampleModal">
            Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload A Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Add a Branch form -->
                <form action="create.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Book Name</label>
                            <input name="bookName" type="text" class="form-control" id="bookName" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Level</label>
                            <input name="level" type="text" class="form-control" id="level" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Course Code</label>
                            <input name="courseCode" type="text" class="form-control" id="courseCode" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Description</label>
                            <input name="description" type="text" class="form-control" id="description" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Author</label>
                            <input name="author" type="text" class="form-control" id="author" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">File Location</label>
                            <input name="fileLocation" type="text" class="form-control" id="fileLocation"
                                placeholder="">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="upload" type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container overflow-auto">
        <table class="table table-white table-bordered mt-5 table-hover" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author</th>
                    <th scope="col">File Location</th>
                    <th scope="col">Downloads</th>
                    <th scope="col">Likes</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $id = 0;
                foreach($rows as $row) { ?>
                <tr>
                    <th scope="row">
                        <?php 
                    $id++;
                    echo $id; ?>
                    </th>
                    <td><?php echo $row['bookName'] ?></td>
                    <td><?php echo $row['courseCode'] ?></td>
                    <td class="overflow-hidden"><?php echo $row['description'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['fileLocation'] ?></td>
                    <td><?php echo $row['downloads'] ?></td>
                    <td><?php echo $row['likes'] ?></td>
                    <td><?php echo $row['uploadDate'] ?></td>
                    <td>
                        <form action="edit.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                            <input type="hidden" name="tableName" value="<?php echo $tableName ?>" />
                            <a href="edit.php?id=<?php echo $row['id'] ?>&tableName=<?php echo $tableName ?>"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                        </form>
                        <form method="post" action="delete.php" style="display: inline-block">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                            <input type="hidden" name="tableName" value="<?php echo $tableName ?>" />
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- END OF COONTAINER-FLUID -->
</div>

<?php require_once 'includes/footer.php' ?>