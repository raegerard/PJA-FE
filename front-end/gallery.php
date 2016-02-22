<?php
session_start();
include_once 'dbcon.php';

?>
<?php 
    require_once('data/database.php');
    
    $database = new Database();
    $database->connect();

    $rooms = mysqli_fetch_array($database->execute("SELECT * FROM room ORDER BY rm_type DESC"));
?>
<?php 
include("header.php")
?> 

            <!-- page content -->
            <div class="page-content">
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Gallery</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Amenities</a></li>
                                <li class="active">Gallery</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="row">
                            <div class="col-md-12 gallery-filter">
                                <div class="button-panel">
                                    <button data-filter="all" class="btn btn-primary filter">All</button>
                                    <button data-filter=".cat_general" class="btn btn-primary filter">General</button>
                                    <button data-filter=".cat_rooms" class="btn btn-primary filter">Rooms</button>
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="row mix-grid thumbnails">
                            <div class="col-md-6 col-xs-6 mix cat_general cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/general-7.jpg" alt="General 1"/>
                                    <div class="thumbnail-info">
                                        <?php print_r($rooms['rm_type']); ?>
                                        <br>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_rooms cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/rooms-2.jpg" alt="Rooms 2"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_general cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/general-5.jpg" alt="General 2"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_rooms cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/rooms-3.jpg" alt="Rooms 3"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_general cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/general-6.jpg" alt="General 3"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_rooms cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/rooms-4.jpg" alt="Rooms 4"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_general cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/general-4.jpg" alt="General 2"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xs-6 mix cat_rooms cat_all">
                                <a class="thumbnail-item">
                                    <img src="assets/img/gallery/rooms-5.jpg" alt="Rooms 5"/>
                                    <div class="thumbnail-info">
                                        <p>Sample text: khagsdk kjlashdkjas kjashdkjashd kjashdj</p>
                                        <button class="btn btn-primary"><span class="fa fa-link"></span></button>
                                        <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    </div>
                                </a>
                            </div>                                
                        </div>
                        
                        <ul class="pagination pagination-sm pull-right">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>                                    
                            <li><a href="#">»</a></li>
                        </ul>                                                
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
<?php include("footer.php");
?> 