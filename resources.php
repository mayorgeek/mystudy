<?php require_once '../conn.php' ?>
<?php require_once 'includes/header1.php' ?>

<title>Resources - MyStudy</title>
<script src="script.js"></script>

<?php require_once 'includes/header2.php' ?>
<?php
 
    $stmt = $pdo->prepare("SELECT * FROM `leveltwobooks`");
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

<div class="container-fliud">
    <div class="container mt-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active h5" aria-current="page"><i
                            class="fas fa-book-reader mr-2 mt-1"></i>Resources</li>
                </ol>
            </nav>
        </div>
    </div>






    <!-- WARNING MODAL -->

    <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="warningModalLabel"><i class="fas fa-info"></i> Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Ooops!...Sorry, this feature will be available soon. Kindly check back for updates 🙏🥺
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF WARNING MODAL -->





    <div class="container mt-5 mb-5">
        <!-- FIRST ROW -->
        <div class="container">

            <div class="row">

                <div class="col-lg-4 mt-3 mb-3">
                    <div id="pop" class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">100 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">100L Books <i class="fas fa-book ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 100 LEVEL lecture notes and textbooks.</p>
                            <a href="list.php?level=100" class="btn btn-primary">Go to page <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">100 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">100L Videos <i class="fas fa-video ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 100 LEVEL Microsoft Teams lecture videos.</p>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">100 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">100L Blog <i class="fas fa-blog ml-2 mt-1"></i></h5>
                            <p class="card-text">Check out OOU 100 LEVEL hottest topics and important updates</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <!-- SECOND ROW -->
        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">200 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">200L Books <i class="fas fa-book ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 200 LEVEL lecture notes and textbooks.</p>
                            <a href="list.php?level=200" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">200 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">200L Videos <i class="fas fa-video ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 200 LEVEL Microsoft Teams lecture videos.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">200 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">200L Blog <i class="fas fa-blog ml-2 mt-1"></i></h5>
                            <p class="card-text">Check out OOU 200 LEVEL hottest topics and important updates</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- THIRD ROW -->
        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">300 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">300L Books <i class="fas fa-book ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 300 LEVEL lecture notes and textbooks.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">300 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">300L Videos <i class="fas fa-video ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 300 LEVEL Microsoft Teams lecture videos.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">300 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">300L Blog <i class="fas fa-blog ml-2 mt-1"></i></h5>
                            <p class="card-text">Check out OOU 300 LEVEL hottest topics and important updates</p>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- FOURTH ROW -->
        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">400 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">400L Books <i class="fas fa-book ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 400 LEVEL lecture notes and textbooks.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96" />
                            <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">400 LEVEL</text>
                        </svg>
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title">400L Videos <i class="fas fa-video ml-2 mt-1"></i></h5>
                            <p class="card-text">Download 400 LEVEL Microsoft Teams lecture videos.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                            <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-3 mb-3>
                    <div class=" card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">400 LEVEL</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">400L Blog <i class="fas fa-blog ml-2 mt-1"></i></h5>
                        <p class="card-text">Check out OOU 400 LEVEL hottest topics and important updates</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#warningModal">
                            Go to page <i class="fas fa-arrow-right ml-1"></i>
                        </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- FIFTH ROW -->
    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">500 LEVEL</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">500L Books <i class="fas fa-book ml-2 mt-1"></i></h5>
                        <p class="card-text">Download 500 LEVEL lecture notes and textbooks.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#warningModal">
                            Go to page <i class="fas fa-arrow-right ml-1"></i>
                        </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">500 LEVEL</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">500L Videos <i class="fas fa-video ml-2 mt-1"></i></h5>
                        <p class="card-text">Download 500 LEVEL Microsoft Teams lecture videos.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#warningModal">
                            Go to page <i class="fas fa-arrow-right ml-1"></i>
                        </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">500 LEVEL</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">500L Blog <i class="fas fa-blog ml-2 mt-1"></i></h5>
                        <p class="card-text">Check out OOU 500 LEVEL hottest topics and important updates</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- SIXTH ROW -->
    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="20%" y="50%" fill="#dee2e6" dy=".3em">POST UTME</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">POST UTME PQ <i class="fas fa-book ml-2 mt-1"></i></h5>
                        <p class="card-text">Download OOU Post UTME Past Questions and Study Materials.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="30%" y="50%" fill="#dee2e6" dy=".3em">JUPEB</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">JUPEB Materials <i class="fas fa-book ml-2 mt-1"></i></h5>
                        <p class="card-text">Download JUPEB Past Questions and Study Materials.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">DIPLOMA</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Diploma Materials <i class="fas fa-book ml-2 mt-1"></i></h5>
                        <p class="card-text">Download OOU Diploma Past Questions and Study Materials.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- SEVENTH ROW -->
    <div class="container mt-5 mb-5">

        <div class="row">

            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="15%" y="50%" fill="#dee2e6" dy=".3em">PRE-DEGREE</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Pre-degree Materials <i class="fas fa-book ml-2 mt-1"></i></h5>
                        <p class="card-text">Download OOU Pre-degre Study Materials.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="12%" y="50%" fill="#dee2e6" dy=".3em">PUTME BLOG</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">ASPIRANTS BLOG <i class="fas fa-blog ml-2 mt-1"></i></h5>
                        <p class="card-text">Check out news updates for OOU aspirants</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="col-lg-4 mt-3 mb-3">
                <div class="card" style="width: 18rem;">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96" />
                        <text class="h1" x="25%" y="50%" fill="#dee2e6" dy=".3em">DIPLOMA</text>
                    </svg>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">500L Blog <i class="fas fa-blog ml-2 mt-1"></i></h5>
                        <p class="card-text">Check out OOU 500 LEVEL hottest topics and important updates</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#warningModal">
                                Go to page <i class="fas fa-arrow-right ml-1"></i>
                            </button>

                        <!-- <a href="#" class="btn btn-primary">Go to page <i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



<!-- INCLUDING THE FOOTER -->
<?php require_once 'includes/footer.php' ?>