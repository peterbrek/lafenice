<?php
$page_title = 'Kapcsolat';
$page_description = 'Exkluzív lakástextil';
$page_keywords = '';
include('header.php');
?>


<!-- Section General Title -->
<div class="general-title bg-color"> 
    <h2>Kapcsolat</h2>
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
                        <h3>Címünk</h3> 
                        <address>                            
                            <p>
                                Nagymező utca 9.<br>
                                1061 Budapest<br>
                                (Code Bemutatóterem, 1. emelet)<br>                           
                            </p>                               
                        </address>                                
                    </div>
                    <!-- Contact Information -->
                    <div class="col-sm-4 col-md-4">
                        <h3>Információ</h3>
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
                        <h3>Nyitvatartás</h3>
                        <address>                            
                            <p>
                                hétfőtől szombatig<br>
                                bejelentkezés alapján                         
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