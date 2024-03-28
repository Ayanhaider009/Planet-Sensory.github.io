<?php include 'include/header.php' ?>
<title>Home </title>
</head>

<body class="imagetag">
    <?php include 'include/menu.php' ?>
    <section class="bannner-main">
        <img src="images/ser-ban.png" class="img-fluid" alt="">
        <div class="banner-overlay">
            <div class="container">
                <div class="text-holder">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <img src="images/simple-bottom.png" class="img-fluid" alt="">
        </div>
    </section>

    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="detail-info">
                        <div class="detail-container">
                            <img src="images/call.png" alt="">
                            <div class="text-holder text-center">
                                <h4>PHONE</h4>
                                <p>+123 456 7890</p>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img src="images/location.png" alt="">
                            <div class="text-holder text-center">
                                <h4>ADDRESS</h4>
                                <p>No 50 Baria Street 133,<br>
                                    NewYork,Usa.</p>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img src="images/email.png" alt="">
                            <div class="text-holder text-center">
                                <h4>EMAIL</h4>
                                <p>info@donainname.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img-container">
                        <img src="images/contact-img.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right">
                    <div class="primary-heading">
                        <h1>QUICK CONTACTS</h1>
                    </div>
                    <div class="main-form mt-4">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">

                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name*">
                                </div>
                                <div class="form-group col-md-4">

                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Phone*">
                                </div>
                                <div class="form-group col-md-4">

                                    <input type="text" class="form-control" id="inputAddress" placeholder="Email*">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="tax-resolution" id="exampleFormControlSelect1">
                                    <option>Service</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea id="w3review" class="form-control" name="w3review" rows="6"
                                    cols="90">Message</textarea>
                            </div>
                            <div class="form-btn mt-4">
                                <button type="submit" class="btn">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-5">
                    <div class="calender pl-5" data-aos="fade-left">
                        <img src="images/calender.png" alt="">
                    </div>
                </div> -->
        </div>
    </section>
    <section class="us-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-container pt-5">
                        <img src="images/map.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php' ?>