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
                            <h1>Reservation</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Reservation</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                <!-- page content wrapper -->
                <div class="page-content-wrap" id="policy">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="row">
                            <div class="col-md-12 this-animate" data-animate="fadeInLeft">
                                
                                <!-- START reservationform PLUGIN -->
                            <div class="block">
                                <h4>Reservation</h4>                                
                                <form id="validate" role="form" class="form-horizontal" action="javascript:alert('Form #validate submited');">                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">First Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[8]] form-control"/>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Last Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[8]] form-control"/>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>                   
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">E-mail:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="" name="email" class="form-control"/>                                        
                                            <span class="help-block">required email</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Phone:</label>    
                                            <div class="col-md-9">
                                                <input type="text" class="mask_phone form-control" value=""/>
                                                <span class="help-block">Example: 98 (765) 432-10-98</span>
                                            </div>
                                        </div>                          
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Age:</label>
                                        <div class="col-md-9    ">
                                            <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control"/>
                                            <span class="help-block">Required, integer, min value = 18, max = 120</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender:</label>
                                        <div class="col-md-3">
                                            <select class="validate[required] select" id="formGender">
                                                <option value="">Choose option</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>                           
                                            <span class="help-block">Required</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date of birth:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[date]] form-control"/>
                                            <span class="help-block">Required, date YYYY-MM-DD</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Check-in:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control datepicker" name="date"/>
                                            <span class="help-block">required date</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Check-out:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control datepicker" name="date"/>
                                            <span class="help-block">required date</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Number of Persons:</label>
                                        <div class="col-md-9    ">
                                            <input type="text" class="form-control"/>
                                            <span class="help-block">Required</span>
                                        </div>                        
                                    </div>                                
                                    <div class="form-group">                        
                                        <div class="col-md-12">
                                            <label class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="validate[required]" name="terms" value="1"/> I have read and accepted the Reservation Policies.
                                                </label>
                                            </label>
                                        </div>
                                    </div>                                
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>                                                                
                                </form>
                            </div>                                               
                            <!-- END reservationform PLUGIN -->
                            </div>
                        </div>
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper --> 

                <!-- page content wrapper -->
                <div class="page-content-wrap" id="policy">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="row">
                            <div class="col-md-12 this-animate" data-animate="fadeInLeft">
                                
                                <div class="block-heading block-heading-centralized">
                                    <h2 class="heading-underline">Reservation policies:</h2>
                                    <div class="block-heading-text">
                                        <p>All cancelled reservations are non-refundable but can still be rebooked.</p>
	                                    <p>The down payment will be forfeited if an officially reserved guest decides to withdraw his or her reservation.</p>
	                                    <p>Rebooking is only allowed when the guest informs the owner two weeks before the supposed check-in date.
	                                    </p>
	                                    <p>The management will not allow other guests to check-in on the reserved rooms even if the reserved guests haven’t arrived yet.</p>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper --> 
                
            </div>
            <!-- ./page content -->
            <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
            <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        

            <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
            <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script> 
            <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>   
            
<?php include("footer.php");
?> 