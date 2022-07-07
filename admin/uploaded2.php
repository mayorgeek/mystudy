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


$lvl = $_GET["lvl"];
$tableName = lvl_check($lvl);





$stmt = $pdo->prepare("SELECT * FROM `$tableName`");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h2 mb-0 text-gray-800 mr-5">View Uploaded Past Questions</h1>
    </div>



    <div class="container overflow-auto">
        <table class="table table-bordered mt-5 table-hover" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">PQ Name</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Description</th>
                    <th scope="col">File Location</th>
                    <th scope="col">Downloads</th>
                    <th scope="col">Likes</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach($rows as $row) { ?>
                <tr>
                    <th scope="row">
                        <?php 
                    $id++;
                    echo $id; ?>
                    </th>
                    <td><?php echo $row['pqName'] ?></td>
                    <td><?php echo $row['courseCode'] ?></td>
                    <td class="overflow-hidden"><?php echo $row['description'] ?></td>
                    <td><?php echo $row['fileLocation'] ?></td>
                    <td><?php echo $row['downloads'] ?></td>
                    <td><?php echo $row['likes'] ?></td>
                    <td><?php echo $row['uploadDate'] ?></td>
                    <td>
                        <a href="editPQ.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form method="post" action="deletePQ.php" style="display: inline-block">
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

    <div class="container">
        <div class="container">

        </div>
    </div>


    <!-- END OF COONTAINER-FLUID -->
</div>

<?php require_once 'includes/footer.php' ?>