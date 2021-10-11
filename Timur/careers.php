<?php

include_once '../header.php';
include_once '../nav.php';

?>
<link type="text/css" rel="stylesheet" href="style.css" />
<section class="masthead">
    <div class="container position-relative" style="margin-top: 150px">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <h1 class="mb-5">Stay connected by joining our community! We'll keep you informed about upcoming events and opportunities.

                    </h1>
                    <form class="form-subscribe" id="contactForm" >
                        <!-- Email address input-->
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" />
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quotes from employers of Humber cart-->
<section class="quotes text-center bg-light">
    <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="testimonial-item img-fluid rounded-circle mb-3" src="img/test1.jpeg" alt="..." />
                    <h5>Tim B.</h5>
                    <p class="font-weight-light mb-0">"I enjoyed the work and the people. I liked the environment and the perks that came along with working there"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="testimonial-item img-fluid rounded-circle mb-3" src="img/test2.jpeg" alt="..." />
                    <h5>Mikhail P.</h5>
                    <p class="font-weight-light mb-0">"A good place to work."</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mx-auto mb-5 mb-lg-0">
                    <img class="testimonial-item img-fluid rounded-circle mb-3" src="img/test3.jpg" alt="..." />
                    <h5>Leo P.</h5>
                    <p class="font-weight-light mb-0">"Humber Cart fosters a collarborative work environment, and enables employees to maintain extracurricular interests."</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once '../footer.php';
?>
