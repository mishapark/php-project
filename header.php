<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humber Cart</title>


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /BOOTSTRAP -->
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/e275c7c512.js" crossorigin="anonymous"></script>
    <!-- /FONT AWESOME -->

    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="./Mikhail/css/index.css" />


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/shopping-cart.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Online Shop
            </a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search product" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="card text-white bg-dark">
                                        <div class="card-img">
                                            <img src="./img/product01.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="card-text">
                                            <h5 class="card-title">Laptop</h5>
                                            <p class="card-price">1500$</p>
                                            <p class="card-quantity"><small class="text-muted">Quantity: 1</small></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="card text-white bg-dark">
                                        <div class="card-img">
                                            <img src="./img/product02.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="card-text">
                                            <h5 class="card-title">Headphones</h5>
                                            <p class="card-price">500$</p>
                                            <p class="card-quantity"><small class="text-muted">Quantity: 1</small></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item dropdown-item__cart" href="#">Open cart</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>