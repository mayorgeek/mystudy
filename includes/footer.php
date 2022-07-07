<!-- Call to Action-->
<section class="call-to-action text-white text-center" id="signup">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <h2 class="mb-4">Subscribe to our newsletter to get updates!</h2>

                <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                    <!-- Email address input-->
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-lg" id="emailAddressBelow" type="email"
                                placeholder="Email Address" data-sb-validations="required,email" />
                            <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">
                                Email Address is required.
                            </div>
                            <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">
                                Email Address Email is not valid.
                            </div>
                        </div>
                        <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton"
                                type="submit">Submit</button>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            <p>To activate this form, sign up at</p>
                            <a class="text-white"
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>







<!-- Footer-->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <center>
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms and Conditions</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="copyright text-muted small mb-4 mb-lg-0">&copy; Copyright <strong><span>MyStudy
                                2021</span></strong>. All Rights Reserved.</p>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">Aiotouch Softwares™</a>
                    </div>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="#!"><i class="bi-twitter fs-3"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="bi-instagram fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </center>
        </div>
    </div>
</footer>


<script src="js/bootstrap.js"></script>
</body>

</html>