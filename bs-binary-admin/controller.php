<?php
include('modelall.php');

$ob = new fullmodel;
 //================================== state select ===================================//
$ob_stat =  $ob->state($connect,'tbl_state');
//=================================  country select ================================//
$ob_cou =  $ob->country($connect,'tbl_country');
//================================ city select ======================================//
$ob_city = $ob->city($connect,'tbl_city');
//=============================== user insert ======================================//
if(isset($_REQUEST['u_submit']))
{
	$user_name = $_REQUEST['user_name'];
	$user_pass = $_REQUEST['user_pass'];
	$address = $_REQUEST['address'];
	$ct_id = $_REQUEST['ct_id'];
	$st_id = $_REQUEST['st_id'];
	$cnt_id = $_REQUEST['cnt_id'];
	$mobile_no = $_REQUEST['mobile_no'];
	$email_id = $_REQUEST['email_id'];
	
	$data = array("user_name"=>$user_name,"user_pass"=>$user_pass,"address"=>$address,"ct_id"=>$ct_id,"st_id"=>$st_id,"cnt_id"=>$cnt_id,"mobile_no"=>$mobile_no,"email_id"=>$email_id);
	
	$ob_user_insert = $ob->user_insert($connect,'tbl_user_d',$data);
}
//=============================== user list ==========================================//
$ob_user_list = $ob->user_list($connect,'tbl_user_d');
//================================ user select for update ==============================//
if(isset($_REQUEST['u_update']))
{
	$user_id = $_REQUEST['u_update'];
	
	$where = array("user_id"=>$user_id);
	
	$ob_us_sel_upd = $ob->user_update_select($connect,'tbl_user_d',$where);
//=============================== user update ===================================//
if(isset($_REQUEST['user_upd']))
{
	$user_id = $_REQUEST['user_id'];
	$user_name = $_REQUEST['user_name'];
	$user_pass = $_REQUEST['user_pass'];
	$address = $_REQUEST['address'];
	$ct_id = $_REQUEST['ct_id'];
	$st_id = $_REQUEST['st_id'];
	$cnt_id = $_REQUEST['cnt_id'];
	$mobile_no = $_REQUEST['mobile_no'];
	$email_id = $_REQUEST['email_id'];
	
	$data = array("user_name"=>$user_name,"user_pass"=>$user_pass,"address"=>$address,"ct_id"=>$ct_id,"st_id"=>$st_id,"cnt_id"=>$cnt_id,"mobile_no"=>$mobile_no,"email_id"=>$email_id);
	//print_r($data);
	$where = array("user_id"=>$user_id);
	//print_r($where);
	
	$object_upd = $ob->user_upd($connect,'tbl_user_d',$data,$where);
}
}
//============================ user delete ========================================//
if(isset($_REQUEST['u_did']))
	{
		$did = $_REQUEST['did'];
		$where = array("user_id"=>$did);
		$obj->gallery_delete($connect,'tbl_gallery',$where);
		
	}
?>