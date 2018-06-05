<?php
include('first.php');
include('cou_ct_state_controller.php'); 
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
if(mff.ct_name.value=="")
    {
       alert("City name is Required");
       mff.ct_name.focus();
       return false;
    }
 /////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.st_id.value=="")
    {
       alert("State is Required");
       mff.st_id.focus();
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
                            CITY ENTRY
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-4">
                            </div>
                                <div class="col-md-4">
                                    
                                    <form role="form" method="post" onsubmit='return checkQuotee(this)'>
                                        <div class="form-group">
                                            <label>City ID :</label>
                                            <input class="form-control" name="ct_id" value="<?php echo $ob_cv[0]->ct_id; ?>" />
                                            <div class="help-block">Help text here.</div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Name :</label>
                                            <input class="form-control" name="ct_name" value="<?php echo $ob_cv[0]->ct_name; ?>" />
                                            <div class="help-block">Help text here.</div>
                                        </div>
                                        <div class="form-group">
                                            <label>State :</label>
                                            <select class="form-control" name="st_id">
                                                <option value="">--Select--</option>
                                                <?php foreach($ob_st as $st)
												{
													if($ob_cv[0]->st_id==$st->st_id)
													{
													?>
                                                    <option value="<?php echo $st->st_id; ?>" selected="selected"><?php echo $st->st_name; ?></option>
                                                    <?php
													}
													else
													{
														?>
                              <option value="<?php echo $st->st_id ?>"><?php echo $st->st_name; ?></option>
                                                    <?php
													}
												}
												?>
                                               
                                            </select>
                                        </div>
                                        
                                        
                                        
                                        <button type="submit" class="btn btn-default" name="city_update">Update</button>
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
