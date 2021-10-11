<?php

include_once '../header.php';
include_once '../nav.php';

?>
    <link type="text/css" rel="stylesheet" href="style.css" />

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Last item badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Last item</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="img/pencils.png" alt="Pencils" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Pencil Dixon</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$3.00</span>
                                $2.25
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="img/erasers.png" alt="Erasers" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Classic Pink Erasers</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$5.00</span>
                                $3.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="img/mark.jpeg" alt="Markers" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jumbo RediMark Marker</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$10.00</span>
                                $5.60
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
include_once '../footer.php';