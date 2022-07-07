<?php require_once 'includes/header1.php' ?>

<title>Contact Us - MyStudy</title>

<?php require_once 'includes/header2.php' ?>

<!-- navbar -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="resources.php">Resources</a>
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


<h1 class="mb-5">Contact <span style="color: skyblue;">Us</span> <i class="fas fa-phone"></i></h1>


<?php require_once 'includes/header4.php' ?>

<div class="container mt-3 mb-5">
    <div class="container">
        <div class="container mt-5 mb-5">
            <h3 class="h2 text-center">Contact Us</h3>
        </div>


        <div class="container bg-light pb-5 pt-3">
            <form action="send-email.php" class="form" method="post">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="name">Your Name</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email">Your Email Address</label>
                        <input name="email" type="text" class="form-control" id="email" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="comment">comment</label>
                        <input name="comment" type="text" class="form-control" id="comment" required>
                    </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>

        </div>


        <div class="container mt-5 mb-1 pt-5">
            <div class="row">

            <!-- WHATSAPP INFO -->
                <h2 class="col h4 pt-3 pb-3" style="font-size: 1.25rem;">
                    <i class="fab fa-whatsapp mx-2"></i>
                    <a class="" href="https://wa.me/message/4FB5O3HLNTMIN1"> +2349059070371</a>
                </h2>


                <!-- GMAIL CONTACT -->
                <!-- <h2 class="col h4 pt-3 pb-3" style="font-size: 1.25rem;">
                    <i class="far fa-email mx-2"></i>
                    <a class="" href=""> Aiotouch</a>
                </h2> -->


                <!-- CALL INFO -->
                <!-- <h2 class="col h4 pt-3 pb-3" style="font-size: 1.25rem;">
                    <i class="fas fa-phone mx-2"></i>
                    <a class="" href=""> Aiotouch</a>
                </h2> -->

                <h2 class="col h4 pt-3 pb-3" style="font-size: 1.25rem;">
                    <i class="fab fa-facebook mx-2"></i>
                    <a class="" href="https://www.facebook.com/1064330879717/posts/159339316014428/?app=fbl"> Aiotouch</a>
                </h2>

                <h2 class="col h4 pt-3 pb-3" style="font-size: 1.25rem;">
                    <i class="fab fa-instagram mx-2"></i>
                    <a class="" href=""> Aiotouch</a>
                </h2>

                <h2 class="col h4 pt-3 pb-3" style="font-size: 1.25rem;">
                    <i class="fab fa-twitter mx-2"></i>
                    <a class="" href=""> Aiotouch</a>
                </h2>

            </div>
        </div>
    </div>
</div>

<!-- INCLUDING THE FOOTER -->
<?php require_once 'includes/footer.php' ?>