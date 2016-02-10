<!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                            <!-- subscribe -->
                            <h3>Subscribe</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your email"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                                    </div>
                                </div>
                            <!-- ./subscribe -->
                            
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="index.php">Home</a>                                    
                                    <a href="gallery.php">Amenities</a>
                                    <a href="reservation.php">Reservation</a>
                                    <a href="contacts.php">Contacts</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                            <!-- recent tweets -->
                            <div class="col-md-3">
                                <h3>Recent Tweets</h3>
                                
                                <div class="list-with-icon small">
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Juan</a> Astig dito! 
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Maria</a> Good Service!
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Pepe</a> Sulit ang pera mo dito! Promise!
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./recent tweets -->
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        8-B North Santo Tomas Road,<br/> 
                                        Campo Sioco
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        (074) 424 3563
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Princess Joanne</strong><br>
                                        <a href="mailto:#">princessjoanneapartelle@sample.com</a>
                                    </div>                                    
                                </div>
                                
                                
                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2016 Princess Joanne <a href="#">Apartelle</a> - All Rights Reserved                            
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="js/plugins/revolution-slider/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>

        <!-- THIS reservation PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>     

        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS reservation PLUGINS --> 
        
        <!--google maps-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script type="text/javascript">
            
            var mapCords = new google.maps.LatLng(16.401833, 120.589125);
            var mapOptions = {zoom: 17,center: mapCords, mapTypeId: google.maps.MapTypeId.ROADMAP}    
            var map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

            var cords = new google.maps.LatLng(16.401833, 120.589125);
            var marker = new google.maps.Marker({position: cords, 
                                                 map: map, 
                                                 title: "Marker 1",
                                                 icon: 'cursor.png'}
                                               );
                                       
        </script>
        <!--end of google maps-->

        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <!-- ./page scripts -->
    </body>
</html>