<?php
session_start();
if(!isset($_SESSION['isLoggedIn']) || !($_SESSION['isLoggedIn']))
{
	//code for authentication comes here
	//ASSUME USER IS VALID
	$_SESSION['isLoggedIn'] = true;
	/////////////////////////////////////////
	$_SESSION['timeOut'] = 60;
	$logged = time();
	$_SESSION['loggedAt']= $logged;	
	showLoggedIn();
}
else
{
	require 'sessiontime_check.php';
	$hasSessionExpired = checkIfTimedOut();
	if($hasSessionExpired)
	{
		session_unset();
		header("Location:login_view.php");
		exit;
	}
	else
	{
		$_SESSION['loggedAt']= time();// update last accessed time
		showLoggedIn();
	}

}
	function showLoggedIn()
	{
		echo'<html>';
		echo'<head>';
		echo'<script type="text/javascript" src="session_ajax.js"></script>';
		echo'</head>';
		echo'<body>';
		echo'</body>';
		echo'</html>';
	}
	