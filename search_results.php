<?php require_once 'conn.php'; ?>
<?php require_once 'includes/header1.php'; ?>

<title>Search Results - MyStudy</title>

<?php require_once 'includes/header2.php' ?>

<?php

$pdo = $pdo;


if (isset($_POST['searchbtn']))
{

    if (isset($_POST['query']))
    {
        $query = $_POST['query'];

        $stmt1 = $pdo->query("SELECT * FROM `levelonebooks` 
                                WHERE (`bookName` LIKE '%$query%')
                                OR (`level` LIKE '%$query%')
                                OR (`courseCode` LIKE '%$query%')");
        //$stmt1->bindValue(":q", $query);

        $stmt2 = $pdo->query("SELECT * FROM `leveltwobooks` 
                            WHERE (`bookName` LIKE '%$query%')
                            OR (`level` LIKE '%$query%')
                            OR (`courseCode` LIKE '%$query%')");
        //$stmt2->bindValue(":q", $query);

        $stmt3 = $pdo->query("SELECT * FROM `levelthreebooks` 
                                WHERE (`bookName` LIKE '%$query%')
                                OR (`level` LIKE '%$query%')
                                OR (`courseCode` LIKE '%$query%')");
        //$stmt3->bindValue(":q", $query);

        $stmt4 = $pdo->query("SELECT * FROM `levelfourbooks` 
                            WHERE (`bookName` LIKE '%".$query."%')
                            OR (`level` LIKE '%".$query."%')
                            OR (`courseCode` LIKE '%$query%')");
        //$stmt4->bindValue(":q", $query);

        $stmt5 = $pdo->query("SELECT * FROM `levelfivebooks` 
                                WHERE (`bookName` LIKE '%$query%')
                                OR (`level` LIKE '%$query%')
                                OR (`courseCode` LIKE '%$query%')");
        //$stmt5->bindValue(":q", $query);


        $stmt1->execute();
        $stmt2->execute();
        $stmt3->execute();
        $stmt4->execute();
        $stmt5->execute();


        $rows1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $rows3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
        $rows4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
        $rows5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
    }

}

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



<!-- ROWS1 -->
<div class="container">
    <div class="container">
        <?php  foreach ($rows1 as $row1) {  ?>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-book mr-3"></i>
                <?php echo $row1['courseCode']; ?>
            </div>
            <div class="card-body">
                <h5 id="dataHolder" data-name="<?php echo $row['bookName'] ?>" class="card-title">
                    <?php echo $row1['bookName'] ?>
                </h5>
                <p class="card-text"><?php echo $row["description"] ?></p>
                <div style="justify-content: inline-block;">
                    <span class="mr-3">
                        <span class="mr-2 text-danger h6">Likes</span>
                        <span class="mr-1"><?php echo $row1['likes'] ?></span>
                        <small><i id="heart" class="far fa-heart"></i></small>
                    </span>
                    <span>
                        <span class="mr-2 text-primary h6">Downloads</span>
                        <span><?php echo $row1['downloads'] ?></span>
                        <small><i class="fas fa-download"></i></small>
                    </span>
                    <a style="float: right" href="<?php echo $row1['fileLocation'] ?>" class="btn btn-success">
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



<!-- END OF ROWS1 -->

<!-- <div class="container pt-3 pb-3">
        <div class="container">
            <h3 class="h5"">200Level search results...</h3>
        </div>
</div> -->

<!-- ROW2 -->

<div class="container">
    <div class="container">
        <?php   foreach ($rows2 as $row2) {  ?>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-book mr-3"></i>
                <?php echo $row2['courseCode']; ?>
            </div>
            <div class="card-body">
                <h5 id="dataHolder" data-name="<?php echo $row2['bookName'] ?>" class="card-title">
                    <?php echo $row2['bookName'] ?>
                </h5>
                <p class="card-text"><?php echo $row2["description"] ?></p>
                <div style="justify-content: inline-block;">
                    <span class="mr-3">
                        <span class="mr-2 text-danger h6">Likes</span>
                        <span class="mr-1"><?php echo $row2['likes'] ?></span>
                        <small><i id="heart" class="far fa-heart"></i></small>
                    </span>
                    <span>
                        <span class="mr-2 text-primary h6">Downloads</span>
                        <span><?php echo $row2['downloads'] ?></span>
                        <small><i class="fas fa-download"></i></small>
                    </span>
                    <a style="float: right" href="<?php echo $row2['fileLocation'] ?>" class="btn btn-success">
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

<!-- END OF ROW2 -->




<!-- ROW3 -->

<div class="container">
    <div class="container">
        <?php   foreach ($rows3 as $row3) {  ?>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-book mr-3"></i>
                <?php echo $row3['courseCode']; ?>
            </div>
            <div class="card-body">
                <h5 id="dataHolder" data-name="<?php echo $row3['bookName'] ?>" class="card-title">
                    <?php echo $row3['bookName'] ?>
                </h5>
                <p class="card-text"><?php echo $row3["description"] ?></p>
                <div style="justify-content: inline-block;">
                    <span class="mr-3">
                        <span class="mr-2 text-danger h6">Likes</span>
                        <span class="mr-1"><?php echo $row3['likes'] ?></span>
                        <small><i id="heart" class="far fa-heart"></i></small>
                    </span>
                    <span>
                        <span class="mr-2 text-primary h6">Downloads</span>
                        <span><?php echo $row3['downloads'] ?></span>
                        <small><i class="fas fa-download"></i></small>
                    </span>
                    <a style="float: right" href="<?php echo $row3['fileLocation'] ?>" class="btn btn-success">
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

<!-- END OF ROW3 -->




<!-- ROW4 -->

<div class="container">
    <div class="container">
        <?php   foreach ($rows4 as $row4) {  ?>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-book mr-3"></i>
                <?php echo $row4['courseCode']; ?>
            </div>
            <div class="card-body">
                <h5 id="dataHolder" data-name="<?php echo $row4['bookName'] ?>" class="card-title">
                    <?php echo $row4['bookName'] ?>
                </h5>
                <p class="card-text"><?php echo $row4["description"] ?></p>
                <div style="justify-content: inline-block;">
                    <span class="mr-3">
                        <span class="mr-2 text-danger h6">Likes</span>
                        <span class="mr-1"><?php echo $row4['likes'] ?></span>
                        <small><i id="heart" class="far fa-heart"></i></small>
                    </span>
                    <span>
                        <span class="mr-2 text-primary h6">Downloads</span>
                        <span><?php echo $row4['downloads'] ?></span>
                        <small><i class="fas fa-download"></i></small>
                    </span>
                    <a style="float: right" href="<?php echo $row4['fileLocation'] ?>" class="btn btn-success">
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

<!-- END OF ROW4 -->




<!-- ROW5 -->

<div class="container">
    <div class="container">
        <?php   foreach ($rows5 as $row5) {  ?>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-book mr-3"></i>
                <?php echo $row5['courseCode']; ?>
            </div>
            <div class="card-body">
                <h5 id="dataHolder" data-name="<?php echo $row5['bookName'] ?>" class="card-title">
                    <?php echo $row5['bookName'] ?>
                </h5>
                <p class="card-text"><?php echo $row5["description"] ?></p>
                <div style="justify-content: inline-block;">
                    <span class="mr-3">
                        <span class="mr-2 text-danger h6">Likes</span>
                        <span class="mr-1"><?php echo $row5['likes'] ?></span>
                        <small><i id="heart" class="far fa-heart"></i></small>
                    </span>
                    <span>
                        <span class="mr-2 text-primary h6">Downloads</span>
                        <span><?php echo $row5['downloads'] ?></span>
                        <small><i class="fas fa-download"></i></small>
                    </span>
                    <a style="float: right" href="<?php echo $row5['fileLocation'] ?>" class="btn btn-success">
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

<!-- END OF ROW5 -->


</div>
</div>