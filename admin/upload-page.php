<?php require_once '../conn.php' ?>
<?php require_once 'includes/header1.php' ?>

<title>Upload Page</title>

<?php require_once 'includes/header2.php' ?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h2 mb-0 text-gray-800 mr-5 ml-5 mt-2">Upload Books</h1>
    </div>




    <!-- BOOKS MODAL -->
    <div class="modal fade" id="booksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <input id="resourceType" name="resourceType" value="book" type="hidden">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="upload" type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END OF BOOKS MODAL -->



    <!-- PAST QUESTION MODAL -->
    <div class="modal fade" id="pqModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload A Past Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <!-- Add a Branch form -->
                <form action="pqCreate.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">PQ Name</label>
                            <input name="pqName" type="text" class="form-control" id="pqName" placeholder="">
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
                            <label for="exampleFormControlInput1">File Location</label>
                            <input name="fileLocation" type="text" class="form-control" id="fileLocation"
                                placeholder="">
                        </div>
                        <input id="resourceType" name="resourceType" value="pq" type="hidden">


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="upload" type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END OF PAST QUESTION MODAL -->




    <!-- UPLOAD OPTIONS FOR VARIOUS LEVELS -->
    <div class="container-fluid">
        <div class="container-fluid">

            <!-- 100LEVEL ROW -->
            <div class="row mt-5 mb-5">

                <!-- column 1 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            100 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 100Level Books</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#booksModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded.php?lvl=100">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            100 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 100Level PQs</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#pqModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded2.php?lvl=100">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END OF 100LEVEL ROW -->



            <!-- 200LEVEL ROW -->
            <div class="row mt-5 mb-5">

                <!-- column 1 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            200 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 200Level Books</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#booksModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded.php?lvl=200">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            200 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 200Level PQs</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#pqModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded2.php?lvl=200">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END OF 200LEVEL ROW -->



            <!-- 300LEVEL ROW -->
            <div class="row mt-5 mb-5">

                <!-- column 1 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            300 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 300Level Books</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#booksModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded.php?lvl=300">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            300 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 300Level PQs</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#pqModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded2.php?lvl=300">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END OF 300LEVEL ROW -->


            <!-- 400LEVEL ROW -->
            <div class="row mt-5 mb-5">

                <!-- column 1 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            400 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 400Level Books</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#booksModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded.php?lvl=400">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            400 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 400Level PQs</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#pqModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded2.php?lvl=400">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END OF 400LEVEL ROW -->



            <!-- 500LEVEL ROW -->
            <div class="row mt-5 mb-5">

                <!-- column 1 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            500 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 500Level Books</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#booksModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded.php?lvl=500">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- column 2 -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            500 LEVEL
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Upload 500Level PQs</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <button type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"
                                data-toggle="modal" data-target="#pqModal">
                                Upload <i class="fas fa-upload text-white-50 ml-1"></i></button>
                            <a style="float: right;" class="btn btn-outline-info" href="uploaded2.php?lvl=500">
                                View <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END OF 500LEVEL ROW -->




        </div>
    </div>
    <!-- END OF UPLOAD OPTIONS -->




    <!-- END OF COONTAINER-FLUID -->
</div>

<?php require_once 'includes/footer.php' ?>