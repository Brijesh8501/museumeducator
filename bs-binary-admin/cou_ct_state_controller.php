<?php
include("model.php");
 
$obj = new model();

//====================== country display ========================//
$object_country = $obj->country_display($connect,'tbl_country');

//======================= insert country =============================//
if(isset($_REQUEST['submit']))
{
	$cnt_name = $_REQUEST['cnt_name'];
	
	$data = array("cnt_name"=>$cnt_name);
$ob_model = $obj->insert_country($connect,'tbl_country',$data);

}
//====================== country select from list to update ========================//
if(isset($_REQUEST['cnt_id']))
{
	$cnt_id = $_REQUEST['cnt_id'];
	
	$data = array("cnt_id"=>$cnt_id);
		
$ob_sel = $obj->country_select($connect,'tbl_country',$data);
}
//========================= country update =========================================//
if(isset($_REQUEST['update']))
{
	$cnt_id = $_REQUEST['cnt_id'];
	$cnt_name = $_REQUEST['cnt_name'];

$data = array("cnt_name"=>$cnt_name);
$where = array("cnt_id"=>$cnt_id);
		
$ob_model = $obj->country_update($connect,'tbl_country',$data,$where);
}
//============================ country delete ========================================//
if(isset($_REQUEST['did']))
	{
		$did = $_REQUEST['did'];
		$where = array("cnt_id"=>$did);
		$obj->country_delete($connect,'tbl_country',$where);
		
	}
//========================== state insert ===========================================//
if(isset($_REQUEST['st_submit']))
{
	$st_name = $_REQUEST['st_name'];
	$cnt_id = $_REQUEST['cnt_id'];
	
	$data = array("st_name"=>$st_name,"cnt_id"=>$cnt_id);
	print_r($data);
	$obj->state_insert($connect,'tbl_state',$data);
}
//============================= country select for state ==============================//
$object_sc = $obj->cou_st_select($connect,'tbl_country');
//=============================== state id ==============================================//
/*$object_st = $obj->st_id($connect,'tbl_country','tbl_state');*/
//================================ state list ==========================================//
$ob_st = $obj->state_list($connect);
//================================= state view for update ================================//
if(isset($_REQUEST['st_id']))
{
   $st_id = $_REQUEST['st_id'];
   
   $data = array("st_id"=>$st_id);
   
$ob_sv = $obj->state_view($connect,'tbl_state',$data);
}
//============================== state update ==================================//
if(isset($_REQUEST['st_update']))
{
	$st_id = $_REQUEST['st_id'];
	$st_name = $_REQUEST['st_name'];
	$cnt_id = $_REQUEST['cnt_id'];
	
	$data = array("st_name"=>$st_name,"cnt_id"=>$cnt_id);
	$where = array("st_id"=>$st_id);
	
	$ob_st_up = $obj->state_update($connect,'tbl_state',$data,$where);
}
// ================================== state delete ==================================//
if(isset($_REQUEST['st_delete']))
{
	$st_delete = $_REQUEST['st_delete'];
	
	$where = array("st_id"=>$st_delete);
	
	$ob_st_d = $obj->state_delete($connect,'tbl_state',$where);
	
}
//=================================== login =========================================//
if(isset($_REQUEST['login']))
{
	
	$user_name = $_REQUEST['user_name'];
	$user_pass = $_REQUEST['user_pass'];
	
	$where = array("user_name"=>$user_name,"user_pass"=>$user_pass);
	
	$ob_login = $obj->login($connect,'tbl_user_d',$where);
	if($ob_login==1)
	{
		//echo $_SESSION['user'] = $user_name;
		header('location:museum_index.php');
	}
	else
	{
		$msg = "Wrong username or passowrd";
	}
}
//================================= user insert =======================================//
if(isset($_REQUEST['ui_submit']))
{
	$user_name = $_REQUEST['user_name'];
	$user_pass = $_REQUEST['user_pass'];
	$address = $_REQUEST['address'];
	$ct_id = $_REQUEST['ct_id'];
	$st_id = $_REQUEST['st_id'];
	$cnt_id = $_REQUEST['cnt_id'];
	$mobile_no = $_REQUEST['mobile_no'];
	$email_id = $_REQUEST['email_id'];
	
	$data = array("username"=>$user_name,"user_pass"=>$user_pass,"address"=>$address,"ct_id"=>$ct_id,"st_id"=>$st_id,"cnt_id"=>$cnt_id,"mobile_no"=>$mobile_no,"email_id"=>$email_id);
	$ob_ui_insert = $obj->user_insert($connect,'tbl_user',$data);
}
//========================== city insert ===========================================//
if(isset($_REQUEST['city_submit']))
{
	$ct_name = $_REQUEST['ct_name'];
	$st_id = $_REQUEST['st_id'];
	
	$data = array("ct_name"=>$ct_name,"st_id"=>$st_id);
	//print_r($data);
	$obj->city_insert($connect,'tbl_city',$data);
}
//================================ city list ==========================================//
$ob_ct = $obj->city_list($connect);
//================================= city view for update ================================//
if(isset($_REQUEST['ct_id']))
{
   $ct_id = $_REQUEST['ct_id'];
   
   $data = array("ct_id"=>$ct_id);
   
$ob_cv = $obj->city_view($connect,'tbl_city',$data);
}
//============================== city update ==================================//
if(isset($_REQUEST['city_update']))
{
	$ct_id = $_REQUEST['ct_id'];
	$ct_name = $_REQUEST['ct_name'];
	$st_id = $_REQUEST['st_id'];
	
	$data = array("ct_name"=>$ct_name,"st_id"=>$st_id);
	$where = array("ct_id"=>$ct_id);
	
	$ob_ct_up = $obj->city_update($connect,'tbl_city',$data,$where);
}
//============================ city delete ========================================//
if(isset($_REQUEST['ci_did']))
	{
		$did = $_REQUEST['did'];
		$where = array("ct_id"=>$did);
		$obj->city_delete($connect,'tbl_country',$where);
		
	}
//========================== event insert ===========================================//
if(isset($_REQUEST['ev_submit']))
{
	$event_name = $_REQUEST['event_name'];
	$description = $_REQUEST['description'];
	date_default_timezone_set("asia/calcutta");
	echo $date_time = date('Y-m-d   h:i:s');
	
	$data = array("event_name"=>$event_name,"description"=>$description,"date_time"=>$date_time);
	//print_r($data);
	$obj->event_insert($connect,'tbl_event',$data);
}
//================================ event list ==========================================//
$ob_event = $obj->event_list($connect,'tbl_event');
//================================= event view for update ================================//
if(isset($_REQUEST['event_id']))
{
   $event_id = $_REQUEST['event_id'];
   
   $data = array("event_id"=>$event_id);
   
$ob_et = $obj->event_view($connect,'tbl_event',$data);
}
//============================== event update ==================================//
if(isset($_REQUEST['ev_update']))
{
	$event_id = $_REQUEST['event_id'];
	$event_name = $_REQUEST['event_name'];
	$description = $_REQUEST['description'];
	$date_time = $_REQUEST['date_time'];
	
	$data = array("event_name"=>$event_name,"description"=>$description,"date_time"=>$date_time);
	$where = array("event_id"=>$event_id);
	
	$ob_ev_up = $obj->event_update($connect,'tbl_event',$data,$where);
}
//============================ event delete ========================================//
if(isset($_REQUEST['ev_did']))
	{
		$did = $_REQUEST['did'];
		$where = array("event_id"=>$did);
		$obj->event_delete($connect,'tbl_event',$where);
		
	}
//========================== collection insert ===========================================//
if(isset($_REQUEST['co_submit']))
{
	$collection_type = $_REQUEST['collection_type'];
	$collection_name = $_REQUEST['collection_name'];
	$description = $_REQUEST['description'];
	
	$data = array("collection_type"=>$collection_type,"collection_name"=>$collection_name,"description"=>$description);
	//print_r($data);
	$obj->collection_insert($connect,'tbl_collection',$data);
}
//================================ collection list ==========================================//
$ob_collection = $obj->collection_list($connect,'tbl_collection');
//================================= collection view for update ================================//
if(isset($_REQUEST['collection_id']))
{
   $collection_id = $_REQUEST['collection_id'];
   
   $data = array("collection_id"=>$collection_id);
   
$ob_co = $obj->collection_view($connect,'tbl_collection',$data);
}
//============================== collection update ==================================//
if(isset($_REQUEST['co_update']))
{
	$collection_id = $_REQUEST['collection_id'];
	$collection_type = $_REQUEST['collection_type'];
	$collection_name = $_REQUEST['collection_name'];
	$description = $_REQUEST['description'];
	
	
	$data = array("collection_type"=>$collection_type,"collection_name"=>$collection_name,"description"=>$description);
	$where = array("collection_id"=>$collection_id);
	
	$ob_co_up = $obj->collection_update($connect,'tbl_collection',$data,$where);
}
//============================ collection delete ========================================//
if(isset($_REQUEST['co_did']))
	{
		$did = $_REQUEST['did'];
		$where = array("collection_id"=>$did);
		$obj->collection_delete($connect,'tbl_collection',$where);
		
	}
//========================== gallery insert ===========================================//
if(isset($_REQUEST['ga_submit']))
{
	$title = $_REQUEST['title'];
	$description = $_REQUEST['description'];
	
	$data = array("title"=>$title,"description"=>$description);
	print_r($data);
	$obj->gallery_insert($connect,'tbl_gallery',$data);
}
//====================== gallery display ========================//
$object_gal = $obj->gallery_list($connect,'tbl_gallery');
//================================= gallery view for update ================================//
if(isset($_REQUEST['gallery_id']))
{
   $gallery_id = $_REQUEST['gallery_id'];
   
   $data = array("gallery_id"=>$gallery_id);
   
$ob_ga = $obj->gallery_view($connect,'tbl_gallery',$data);
}
//============================== gallery update ==================================//
if(isset($_REQUEST['ga_update']))
{
	$gallery_id = $_REQUEST['gallery_id'];
	$title = $_REQUEST['title'];
	$g_videos = $_REQUEST['g_videos'];
	$g_photos = $_REQUEST['g_photos'];
	$description = $_REQUEST['description'];
	
	$data = array("title"=>$title,"g_videos"=>$g_videos,"g_photos"=>$g_photos,"description"=>$description);
	$where = array("gallery_id"=>$gallery_id);
	
	$ob_ga_up = $obj->gallery_update($connect,'tbl_gallery',$data,$where);
}
//============================ gallery delete ========================================//
if(isset($_REQUEST['g_did']))
	{
		$did = $_REQUEST['g_did'];
		$where = array("gallery_id"=>$did);
		$obj->gallery_delete($connect,'tbl_gallery',$where);
		
	}
//========================== exhibition insert ===========================================//
if(isset($_REQUEST['ex_submit']))
{
	$exhibition_name = $_REQUEST['exh_name'];
	$description = $_REQUEST['description'];
	date_default_timezone_set("asia/calcutta");
	echo $date_time = date('Y-m-d   h:i:s');
	
	$data = array("exh_name"=>$exhibition_name,"description"=>$description,"date_time"=>$date_time);
	//print_r($data);
	$obj->exhibition_insert($connect,'tbl_exhibition',$data);
}
//================================ exhibition list ==========================================//
$ob_exhibition = $obj->exhibition_list($connect,'tbl_exhibition');
//================================= exhibition view for update ================================//
if(isset($_REQUEST['exhibition_id']))
{
   $exhibition_id = $_REQUEST['exhibition_id'];
   
   $data = array("exhibition_id"=>$exhibition_id);
   
$ob_ex = $obj->exhibition_view($connect,'tbl_exhibition',$data);
}
//============================== exhibition update ==================================//
if(isset($_REQUEST['ex_update']))
{
	$exhibition_id = $_REQUEST['exhibition_id'];
	$exhibition_name = $_REQUEST['exh_name'];
	$description = $_REQUEST['description'];
	$date_time = $_REQUEST['date_time'];
	
	$data = array("exh_name"=>$exhibition_name,"description"=>$description,"date_time"=>$date_time);
	$where = array("exhibition_id"=>$exhibition_id);
	
	$ob_ex_up = $obj->exhibition_update($connect,'tbl_exhibition',$data,$where);
}
//============================ exhibition delete ========================================//
if(isset($_REQUEST['ex_did']))
	{
		$did = $_REQUEST['did'];
		$where = array("exhibition_id"=>$did);
		$obj->exhibition_delete($connect,'tbl_exhibition',$where);
		
	}
?>