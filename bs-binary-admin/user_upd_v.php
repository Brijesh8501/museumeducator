<?php
include('first.php');
include('controller.php');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <SCRIPT language=Javascript>
     <!--
      function isDecimalNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
/////////////////////////////////////////////////////////////////////////////////////////////
function isNumberKey(evt) 
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
 
 function checkQuotee(mff)
{
	
////////////////////////////////////////////////////////////////////////////////////////////////
if(mff.user_name.value=="")
    {
       alert("User name is Required");
       mff.user_name.focus();
       return false;
    }
 /////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.user_pass.value=="")
    {
       alert("password is Required");
       mff.user_pass.focus();
       return false;
    }
	/////////////////////////////////////////////////////////////////////////////////////////////////
	 /////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.description.value=="")
    {
       alert("Description is Required");
       mff.description.focus();
       return false;
    }
	///////////////////////////////////////////////////////////////////////////////////////////////// /////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.ct_id.value=="")
    {
       alert("City is Required");
       mff.ct_id.focus();
       return false;
    }
	///////////////////////////////////////////////////////////////////////////////////////////////// /////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.st_id.value=="")
    {
       alert("State is Required");
       mff.st_id.focus();
       return false;
    }
	/////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.mobile_no.value=="")
    {
       alert("Mobile no is Required");
       mff.mobile_no.focus();
       return false;
    }
	if(mff.email_id.value=="")
    {
       alert("Email id is Required");
       mff.email_id.focus();
       return false;
    }
	
}     
   </SCRIPT>
</head>
<body>
    <?php include('top.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            USER DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-4">
                            </div>
                                <div class="col-md-4">
                                    
                                    <form role="form" method="post" onsubmit='return checkQuotee(this)'>
                                        <div class="form-group">
                                            <label>User ID :</label>
                                            <input class="form-control" name="user_id" value="<?php echo $ob_us_sel_upd[0]->user_id; ?>" />
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>User Name :</label>
                                            <input class="form-control" name="user_name" value="<?php echo $ob_us_sel_upd[0]->user_name; ?>" />
                                            <div class="help-block"></div>
                                        </div>
                                         <div class="form-group">
                                            <label>Password :</label>
                                            <input class="form-control" type="password" name="user_pass" value="<?php echo $ob_us_sel_upd[0]->user_pass; ?>" />
                                            <div class="help-block"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Address :</label>
                                            <textarea class="form-control" rows="3" name="address"><?php echo $ob_us_sel_upd[0]->address; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>City :</label>
                                            <select class="form-control" name="ct_id">
                                                <option>--Select--</option>
                                               <?php
											   foreach($ob_city as $res)
											   {
												   if($ob_us_sel_upd[0]->ct_id==$res->ct_id)
												   {
												   ?>
                                                   <option value="<?php echo $res->ct_id;?>" selected="selected"><?php echo $res->ct_name; ?></option>
                                                   <?php
												   }
												   else 
												   {
													   ?>
                                                   <option value="<?php echo $res->ct_id; ?>"><?php echo $res->ct_name; ?></option>
                                                   <?php
												   }
											   }
											   ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>State :</label>
                                            <select class="form-control" name="st_id">
                                                <option>--Select--</option>
                                                <?php
												foreach ($ob_stat as $res)
												{
													if($ob_us_sel_upd[0]->ct_id==$res->st_id)
												   {
													?>
                                                    <option value="<?php echo $res->st_id; ?>" selected="selected"><?php echo $res->st_name; ?></option>                <?php
												   }
												   else 
												   {
													   ?>
                                                       <option value="<?php echo $res->st_id; ?>"><?php echo $res->st_name; ?></option> 
                                                    <?php
												}
												}
												?>
                                               
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Country :</label>
                                            <select class="form-control" name="cnt_id">
                                                <option>--Select--</option>
                                                <?php
												foreach($ob_cou as $res)
												{
													if($ob_us_sel_upd[0]->cnt_id==$res->cnt_id)
												   {
													?>
													<option value="<?php echo $res->cnt_id; ?>" selected="selected"><?php echo $res->cnt_name; ?></option>                               <?php
												   }
												   else 
												   {
													   ?>
                                            <option value="<?php echo $res->cnt_id; ?>"><?php echo $res->cnt_name; ?></option>                              
                                                    <?php
												   }
												}
												?>
                                               
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Mobile No :</label>
                                            <input class="form-control" name="mobile_no" value="<?php echo $ob_us_sel_upd[0]->mobile_no; ?>"/>
                                            <div class="help-block"></div>
                                        </div>
                                         <div class="form-group">
                                            <label>Email ID :</label>
                                            <input class="form-control" type="email" name="email_id" value="<?php echo $ob_us_sel_upd[0]->email_id; ?>" />
                                            <div class="help-block"></div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" name="user_upd">Update</button>
                                        <button type="submit" class="btn btn-primary">Back</button>

                                    </form>
                                    

   
                                
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
