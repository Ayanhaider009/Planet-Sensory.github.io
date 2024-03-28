<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<header>
    <div class="main-navigate">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <!-- <div class="header-inFo">
                        <div class="d-flex align-items-center">
                            <span>
                                <img src="images/phone.png" class="img-fluid lazyload" alt="phone">
                            </span>
                            <span>
                                <h5>CALL US</h5>
                                <a href="#">000 123 456 789</a>
                            </span>
                            <div class="header-btn">
                                <a href="" class="btn">GET A QUOTE</a>
                            </div>
                           
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="mx-auto">
                            <a href="index.php" class="navbar-brand">
                                <img src="images/logo.png" class="lazyload" alt="logo">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item <?= ($activePage == 'index') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item <?= ($activePage == 'about') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="about.php">About us</a>
                                </li>
                                <li class="nav-item <?= ($activePage == 'service') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="service.php">Service</a>
                                </li>
                                <li class="nav-item <?= ($activePage == 'gallary') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item <?= ($activePage == 'gallary') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item <?= ($activePage == 'gallary') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>

                            </ul>
                        </div>
                        <div class="header-inFo">
                            <div class="d-flex align-items-center">
                                <div class="header-btn">
                                    <a href="" class="btn">Book A Visit</a>
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>