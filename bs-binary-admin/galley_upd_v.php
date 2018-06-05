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
                                    
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Gallery ID :</label>
                                            <input class="form-control" name="gallery_id" value="<?php echo $ob_ga[0]->gallery_id; ?>"/>
                                            <div class="help-block">Help text here.</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Title :</label>
                                            <input class="form-control" name="title" value="<?php echo $ob_ga[0]->title; ?>" />
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Video :</label>
                                           <input type="file" name="g_videos" value="<?php echo $ob_ga[0]->g_videos; ?>"/>
                                            <div class="help-block"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Photo :</label>
                                            <input type="file" name="g_photos" value="<?php echo $ob_ga[0]->g_photos; ?>"/>
                                            <div class="help-block"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Description :</label>
                                            <textarea class="form-control" rows="3" name="description"><?php echo $ob_ga[0]->description; ?></textarea>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default" name="ga_update">Update Button</button>
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
