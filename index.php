<?php require_once 'includes/header1.php' ?>

<title>Home - MyStudy</title>

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


<h1 class="mb-5">Welcome to <span style="color: skyblue;">MyStudy!</span></h1>


<?php require_once 'includes/header4.php' ?>




<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                    <h3>Lecture Books</h3>
                    <p class="lead mb-0">We provide you with all your neccessary textbooks</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                    <h3>Lecture Videos</h3>
                    <p class="lead mb-0">You also won't miss out on online lectures 
                                         as we provide you these videos for free
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                    <h3>Past Questions</h3>
                    <p class="lead mb-0">All past questions for your various courses are available</p>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Image Showcases-->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img"
                style="background-image: url('img/bg-showcase-1.jpg')">
            </div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Our Blog</h2>
                <p class="lead mb-0">
                    <span style="color: skyblue; font-size: 1.25rem; font-weight: 400;">MyStudy</span> also provides 
                    you with a blog site more like a social media
                    platform where you can catch with friends and also get <b>vital</b> latest 
                    information from recognized authorities in your institution.
                </p>
            </div>
        </div>
    </div>
</section>




<!-- Testimonials-->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="..." />
                    <h5>Kayode</h5>
                    <p class="font-weight-light mb-0">"wow! Thanks so much for providing all these resources for free!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="..." />
                    <h5>Grace</h5>
                    <p class="font-weight-light mb-0">
                        "This is a very wonderful platform I guess everyone should know about!"
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="..." />
                    <h5>Anonymous</h5>
                    <p class="font-weight-light mb-0">
                    "My shoutout goes to the Founder and the whole 
                    <span style="color: skyblue; font-weight: 400;">MyStudy</span> team"
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- INCLUDING THE FOOTER -->
<?php require_once 'includes/footer.php' ?>