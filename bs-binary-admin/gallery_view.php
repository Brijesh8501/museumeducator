﻿<?php
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
if(mff.title.value=="")
    {
       alert("Title is Required");
       mff.title.focus();
       return false;
    }
 /////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.g_videos.value=="")
    {
       alert("video is Required");
       mff.g_videos.focus();
       return false;
    }
	/////////////////////////////////////////////////////////////////////////////////////////////////
	if(mff.g_photos.value=="")
    {
       alert("Photo is Required");
       mff.g_photos.focus();
       return false;
    }
	if(mff.description.value=="")
    {
       alert("Description is Required");
       mff.description.focus();
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
                            GALLERY ENTRY
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-4">
                            </div>
                                <div class="col-md-4">
                                    
                                    <form role="form" method="post" enctype="multipart/form-data" onsubmit='return checkQuotee(this)'>
                                        <div class="form-group">
                                            <label>Gallery ID :</label>
                                            <input class="form-control" name="gallery_id" />
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Title :</label>
                                            <input class="form-control" name="title" />
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Videos :</label>
                                            <input type="file" class="form-control" name="g_videos" />
                                            <div class="help-block"></div>
                                        </div>
                                         <div class="form-group">
                                            <label>Photos :</label>
                                            <input type="file" class="form-control" name="g_photos" />
                                            <div class="help-block"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Description :</label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default" name="ga_submit">Submit Button</button>
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
