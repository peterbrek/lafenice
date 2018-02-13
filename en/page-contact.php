<?php
$page_title = 'Contact';
$page_description = 'Exclusive home textiles, curtain fabrics';
$page_keywords = '';
include('header.php');
?>


<!-- Section General Title -->
<div class="general-title bg-color">
    <h2>Contact us</h2>
    <div class="title-divider"></div>
</div>

<!-- Site Wrapper -->
<div class="site-wrapper">

    <!-- Contact -->
    <div class="container padding-bottom text-center contact-address">
        <!-- All Contact Information (phone, street, email, website, working hours) -->
        <div class="row">
                    <!-- Address -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Our Showrooms</h3>
                        <address>
                            <p>
                                Andrássy str. 14., 1st floor<br>
                                H-1061 Budapest<br>
                            </p>
                        </address>

                        <address>
                            <p>
                                Király str. 47.<br>
                                H-1077 Budapest<br>
                                (Spirithome Furnishings)<br>
                            </p>
                        </address>
                    </div>
                    <!-- Contact Information -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Contact info</h3>
                        <address>
                            <p>
                                <a href="mailto:info@lafenice.hu"><i class="fa fa-envelope-o"></i>info@lafenice.hu</a><br>
                                <i class="fa fa-phone"></i>+36 70 635 7992<br>
                                <i class="fa fa-phone"></i>+36 70 635 7991<br>
                            </p>
                        </address>
                    </div>
                    <!-- Working Hours -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Office hours</h3>
                        <address>
                            <p>
                                Monday to Saturday<br>
                                by appointment
                            </p>
                        </address>
                    </div>
                </div><!-- /row -->
                <!-- End All Contact Information -->

            </div><!-- /container -->
            <!-- End Contact -->

        </div><!-- /site wrapper -->
        <!-- End Site Wrapper -->

        <!-- Google Map (adress on map can be changed in app.js file) -->
        <div id="map-canvas"></div>
        <!-- End Google Map -->


        <?php include('footer.php'); ?>
