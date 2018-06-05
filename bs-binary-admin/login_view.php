<?php
include('db.php');
session_start();

if(isset($_SESSION['user']))
{
	header("location:museum_index.php");
}
if(isset($_REQUEST['login']))
{
	
	$user_name = $_REQUEST['user_name'];
	$user_pass = $_REQUEST['user_pass'];
	//$ch = $_REQUEST['ch'];
	 if (isset($_REQUEST['ch'])) {
		 
		setcookie("user_name",$user_name,time()+3600);
		setcookie("user_pass",$user_name,time()+3600);
	 }
	$login = "select * from tbl_user_d where user_name='$user_name' and user_pass='$user_pass'";
	$exe = $conn->query($login);
	$result = $exe->num_rows;
	if($result==1)
	{   
		 $_SESSION['user'] = $user_name;
		header('location:museum_index.php');
	}
	else
	{
		$msg = "Wrong username or password";
	}
}
else {
  
	 $user_name = '';
  $user_pass = '';
  
 if (isset($_COOKIE['user_name'])) {
    $user_name = $_COOKIE['user_name'];
  }

  if (isset($_COOKIE['user_pass'])) {
    $user_pass = $_COOKIE['user_pass'];
  }
  
}
  

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
   <script type="text/javascript" src="jvscri.js"></script>
   <style type="text/css">
    #r1 {
		width:70%;
		margin-top:170px;
	}
	b {
	    font-size:24px;
		color:#03F;
	}
   </style>
</head>
<body>
    
        <!-- /. NAV SIDE  -->
        
                 <!-- /. ROW  -->
                <center>
               <div class="row" >
                <div class="col-md-12">
                    <!-- Form Elements -->
                   
                    <div id="r1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>MUSEUM EDUCATOR</b>
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-4">
                            </div>
                                <div class="col-md-4">
                                    
                                    <form role="form" method="post" name="lo" onsubmit="return logins()">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@Username :</span>
                                            <input type="text" class="form-control" name="user_name" placeholder="Username" value="<?=$user_name?>" onkeyup="logins()" id="lg">
                                            
                                        </div>
                                        <div class="help-block" align="left" id="lg_msg1"></div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@Password :</span>
                                            <input type="password" class="form-control" name="user_pass" placeholder="Password" value="<?=$user_pass?>" onKeyUp="logins()" id="pass">
                                            
                                        </div>
                                        <div class="help-block" align="left" id="lg_msg2"></div>
                                        <div class="help-block" style="color:#F00;"><?php if(isset($_REQUEST['login']))
										{echo $msg; } ?></div>
                                        
                                        <?php if(isset($_COOKIE['user_name']))
										{
											?>
                                        <div class="help-block"><input type="checkbox" name="ch" value="1" checked/> Remember me</div>  
                                        <?php
										}
										else
										{
											?>
                                       <div class="help-block"><input type="checkbox" name="ch" value="1"/> Remember me</div>  

                                       <?php
										}
										?>
                                        <button type="submit" class="btn btn-primary" name="login">Login</button>

                                    </form>
                                    

   
                                
                                
                            </div>
                        </div>
                    </div>
                    </div>
                    
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
    </div>
    </center>
             <!-- /. PAGE INNER  -->
            
         <!-- /. PAGE WRAPPER  -->
        
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
