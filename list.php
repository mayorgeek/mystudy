<?php require_once 'conn.php'; ?>
<?php require_once 'includes/header1.php'; ?>

<title>List - MyStudy</title>

<?php require_once 'includes/header2.php' ?>
<?php

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

$lvl = $_GET["level"];
$tableName = lvl_check($lvl);


 $stmt = $pdo->prepare("SELECT * FROM `$tableName`");
 $stmt->execute();
 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- navbar -->
<li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="resources.php">Resources <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="blog.php">Blog</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="about.php">About</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="contact.php">Contact Us</a>
</li>

<?php require_once 'includes/header3.php' ?>


<h1 class="mb-5">Browse <span style="color: skyblue;">Resources...</span></h1>


<?php require_once 'includes/header4.php' ?>


<div class="container-fluid">
    <div class="container mt-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item h5"><i class="fas fa-book-reader mr-2 mt-1"></i><a
                            href="resources.php">Resources</a></li>
                    <li class="breadcrumb-item active h5" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
    </div>
</div>







<div class="container">
    <div class="container">
        <?php   foreach ($rows as $row) {  ?>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-book mr-3"></i>
                <?php echo $row['courseCode']; ?>
            </div>
            <div class="card-body">
                <h5 id="dataHolder" data-name="<?php echo $row['bookName'] ?>" class="card-title">
                    <?php echo $row['bookName'] ?>
                </h5>
                <p class="card-text"><?php echo $row["description"] ?></p>
                <div style="justify-content: inline-block;">
                    <span class="mr-3">
                        <span class="mr-2 text-danger h6">Likes</span>
                        <span class="mr-1"><?php echo $row['likes'] ?></span>
                        <small><i id="heart" class="far fa-heart"></i></small>
                    </span>
                    <span>
                        <span class="mr-2 text-primary h6">Downloads</span>
                        <span><?php echo $row['downloads'] ?></span>
                        <small><i class="fas fa-download"></i></small>
                    </span>
                    <a style="float: right" href="<?php echo $row['fileLocation'] ?>" class="btn btn-success">
                        Download <i class="fas fa-download ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <?php 
        }

?>
    </div>
</div>

<!-- TODO: MAKE LIKE BUTTON WORK WITH AJAX-->
<script>
    var like = document.querySelectorAll("#heart");
    var likeCounter = 0;

    like.forEach(function (like) {
        like.addEventListener("click", function () {
            like.style.color = 'red';
        });
    });


    // URL, METHOD, DATATYPE:JSON, DATA:{key: 'blahblahblah', rowID: rowID},
    // success: function (response) {}

    function likeAction(likeCounter) {
        var likeCounter = likeCounter;
        var bookName = document.getElementById('dataHolder').name;
        console.log(bookName);
        likeCounter++;

        $.ajax({
            url: "likes.php",
            method: "POST",
            dataType: "text",
            data: {
                key: "likes",
                id: id,
                likeCounter: likeCounter
            }
        });
    }
</script>


<!-- INCLUDING THE FOOTER -->
<?php require_once 'includes/footer.php' ?>