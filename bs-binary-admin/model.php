<?php
include ("connect.php");

$object = new connect();
$connect = $object->conn();

class model 
{
	//===================== country insert ============================================//
	public function insert_country($connect,$table,$data)
	{
		//////////////insert query///////////////////
		 $cou_key = array_keys($data);
		 $cou_field = implode(",",$cou_key);
		$cou_value = array_values($data);
		$cou_value = implode("','",$cou_value);
		$insert_country = "insert into $table($cou_field) values('$cou_value')";
		$res_insert = $connect->query($insert_country);
		header('location:country_list.php');
		//print_r($cou_key);
		//print_r($cou_value);
	}
	//==================== country display ===============================================//

  public function country_display($connect,$table)
	{
		$sel = "select * from $table";
		$res = $connect->query($sel);
		while($row = $res->fetch_object())
		{
			$rw[] = $row;
		}
		return $rw;		
	}
	//================================= country select for update ================================//
  public function country_select($connect,$table,$data)
  {
	   $dkey = array_keys($data);
	  $dvalue = array_values($data);
	  $j = 0;
	  $select = "select * from $table where 1=1";
	  foreach($data as $res)
	  {
		  $select.= " and ".$dkey[$j]."='".$dvalue[$j]."'";
			$j++; 
	  }
	  $result = $connect->query($select);
	  while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	  
	  return $row;
  }
  //===================================== country update ================================================//
  public function country_update($connect,$table,$data,$where)
  {
	  $dkey = array_keys($data);
	  $dvalue = array_values($data);
	  $whr_key = array_keys($where);
	  $whr_values = array_values($where);
	  $size = sizeof($data);
	  $i = 0;
	  $k = 0;
	  $update = "update $table set";
	  foreach($data as $r)
	  {
		  if($size==$i+1)
		  {
		  $update.=" ".$dkey[$i]."="."'".$dvalue[$i]."'";
		  }
		  else
		  {
		 $update.=" ".$dkey[$i]."="."'".$dvalue[$i]."'".","."";
		  }
		  $i++;
	  }
	  $update.=" where 1=1";
	  foreach($where as $rw)
	  {
		 
		  $update.=" and ".$whr_key[$k]."="."'".$whr_values[$k]."'";
		  
		  $k++;
	  }
	  $connect->query($update);
	  header('location:country_list.php');
  }
  //======================================= country delete =======================================================//
 public function country_delete($connect,$table,$where)
 {
	 $delkey = array_keys($where);
	 $delvalue = array_values($where);
	$i = 0;
	$del_cou = "delete from $table where";
	
	foreach($where as $whr)
	{
		echo 
		$del_cou.=" ".$delkey[$i]."='".$delvalue[$i]."'";
		$i++;
	}
	$connect->query($del_cou);
	
 }
 //=================================== state insert =================================================//
 public function state_insert($connect,$table,$data)
 {
	 $skey = array_keys($data);
	 $sfield = implode(",",$skey);
	 $svalue =array_values($data);
	 $sfval = implode("','",$svalue);
	 
	 $st_insert = "insert into $table($sfield) values('$sfval')";
	 $connect->query($st_insert);
	 header('location:state_list.php');
 }
 //================================= select country for state ==========================================//
 public function cou_st_select($connect,$table)
 {
	 $sc_select = "select * from $table";
	 $sexc = $connect->query($sc_select);
	 while($s_fetch = $sexc->fetch_object())
	 {
		 $row[] = $s_fetch;
	 }
	 return $row;
 }
 //============================== state id =======================================================//
/* public function st_id($connect,$table)
 {
	 $st_select = "select max(st_id)+1 from $table";
	 $exc = $connect->query($st_select);
	 $st_fetch = $exc->fetch_object();
	// print_r($st_fetch);
	foreach($st_fetch as $rs)
	{
	 if($rs!= null && $rs[0]>0)
	 {
		 $row = $rs[0];
	 }
	 else
	 {
		 $row = "1";
	 }
	}
	 return $row;
 }*/
 //================================= state list =================================================//
 public function state_list($connect)
 {
	 $st_list = "select st_id,st_name,cnt_name from tbl_state,tbl_country where tbl_country.cnt_id = tbl_state.cnt_id ";
	 $st_ex = $connect->query($st_list);
	 while($s_fetch = $st_ex->fetch_object())
	 {
		 $s_row[] = $s_fetch;
	 }
	 return $s_row; 
 }
 //===================================== state update view ============================================//
 public function state_view($connect,$table,$data)
 {
	 $sv_key = array_keys($data);
	 $sv_value = array_values($data);
	 $st_view = "select * from $table where 1=1";
	 $i = 0;
	 foreach($data as $r)
	 {
		 $st_view.=" and ".$sv_key[$i]."='".$sv_value[$i]."' ";
		 $i++;
	 }
	 $result = $connect->query($st_view);
	 while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	 return $row;
 }
 //===================================== state update ====================================================//
 public function state_update($connect,$table,$data,$where)
 {
	 $su_key = array_keys($data);
	 $su_value = array_values($data);
	  $wh_key = array_keys($where);
	 $wh_value = array_values($where);
	 $su_update = "update $table set";
	 $i=0;
	 $j=0;
	 $size = sizeof($data);
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."' ";
		 }
		 else
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."', ";
		 }
		 $i++;
	 }
	 $su_update.=" where";
	 foreach($where as $wh)
	 {
		 echo $su_update.=" ".$wh_key[$j]."='".$wh_value[$j]."'";
		 $j++;
	 }
	 $result = $connect->query($su_update);
	 header('location:state_list.php');
	 
 }
 // ====================================== state delete =====================================//
 public function state_delete($connect,$table,$where)
 {
	 $sd_key = array_keys($where);
	 $sd_value = array_values($where);
	 $sd_del = "delete from $table where";
	 $k=0;
	 foreach($where as $whe)
	 {
		  echo $sd_del.=" ".$sd_key[$k]."='".$sd_value[$k]."'";
		  $k++;
	 }
	 
	 $connect->query($sd_del);
 }
 //====================================== login ======================================= //
 public function login($connect,$table,$where)
	{	
		$key = array_keys($where);
		$value = array_values($where);
		//$i = 0;
		$sel = "select * from $table where ".$key[0]."='".$value[0]."' and ".$key[1]."='".$value[1]."'";
		$res = $connect->query($sel);
		$num_r = $res->num_rows;
		return $num_r;	
	}
// ====================city insert ======================================//
 public function city_insert($connect,$table,$data)
 {
	 $skey = array_keys($data);
	 $sfield = implode(",",$skey);
	 $svalue =array_values($data);
	 $sfval = implode("','",$svalue);
	 
	 $ct_insert = "insert into $table($sfield) values('$sfval')";
	 $connect->query($ct_insert);
	 header('location:city_list.php');
 }
  //================================= city list =================================================//
 public function city_list($connect)
 {
	 $ct_list = "select ct_id,ct_name,st_name from tbl_city,tbl_state where tbl_state.st_id = tbl_city.st_id ";
	 $ct_ex = $connect->query($ct_list);
	 while($s_fetch = $ct_ex->fetch_object())
	 {
		 $s_row[] = $s_fetch;
	 }
	 return $s_row; 
 }
 //===================================== city update view ============================================//
 public function city_view($connect,$table,$data)
 {
	 $sv_key = array_keys($data);
	 $sv_value = array_values($data);
	 $st_view = "select * from $table where 1=1";
	 $i = 0;
	 foreach($data as $r)
	 {
		 $st_view.=" and ".$sv_key[$i]."='".$sv_value[$i]."' ";
		 $i++;
	 }
	 $result = $connect->query($st_view);
	 while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	 return $row;
 }
  //===================================== city update ====================================================//
 public function city_update($connect,$table,$data,$where)
 {
	 $su_key = array_keys($data);
	 $su_value = array_values($data);
	  $wh_key = array_keys($where);
	 $wh_value = array_values($where);
	 $su_update = "update $table set";
	 $i=0;
	 $j=0;
	 $size = sizeof($data);
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."' ";
		 }
		 else
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."', ";
		 }
		 $i++;
	 }
	 $su_update.=" where";
	 foreach($where as $wh)
	 {
		 echo $su_update.=" ".$wh_key[$j]."='".$wh_value[$j]."'";
		 $j++;
	 }
	 $result = $connect->query($su_update);
	 header('location:city_list.php');
	 
 }
  //======================================= city delete =======================================================//
 public function city_delete($connect,$table,$where)
 {
	 $delkey = array_keys($where);
	 $delvalue = array_values($where);
	$i = 0;
	$del_cou = "delete from $table where";
	
	foreach($where as $whr)
	{
		echo 
		$del_cou.=" ".$delkey[$i]."='".$delvalue[$i]."'";
		$i++;
	}
	$connect->query($del_cou);
	
 }
 // ==================== event insert ======================================//
 public function event_insert($connect,$table,$data)
 {
	 $skey = array_keys($data);
	 $sfield = implode(",",$skey);
	 $svalue =array_values($data);
	 $sfval = implode("','",$svalue);
	 
	 $ct_insert = "insert into $table($sfield) values('$sfval')";
	 $connect->query($ct_insert);
	 header('location:event_list.php');
 }
 //================================= event list =================================================//
 public function event_list($connect,$table)
 {
	 $ct_list = "select * from $table";
	 $ct_ex = $connect->query($ct_list);
	 while($s_fetch = $ct_ex->fetch_object())
	 {
		 $s_row[] = $s_fetch;
	 }
	 return $s_row; 
 }
  //===================================== event update view ============================================//
 public function event_view($connect,$table,$data)
 {
	 $sv_key = array_keys($data);
	 $sv_value = array_values($data);
	 $st_view = "select * from $table where 1=1";
	 $i = 0;
	 foreach($data as $r)
	 {
		 $st_view.=" and ".$sv_key[$i]."='".$sv_value[$i]."' ";
		 $i++;
	 }
	 $result = $connect->query($st_view);
	 while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	 return $row;
 }
  //===================================== event update ====================================================//
 public function event_update($connect,$table,$data,$where)
 {
	 $su_key = array_keys($data);
	 $su_value = array_values($data);
	  $wh_key = array_keys($where);
	 $wh_value = array_values($where);
	 $su_update = "update $table set";
	 $i=0;
	 $j=0;
	 $size = sizeof($data);
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."' ";
		 }
		 else
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."', ";
		 }
		 $i++;
	 }
	 $su_update.=" where";
	 foreach($where as $wh)
	 {
		 echo $su_update.=" ".$wh_key[$j]."='".$wh_value[$j]."'";
		 $j++;
	 }
	 $result = $connect->query($su_update);
	 header('location:event_list.php');
	 
 }
  //======================================= event delete =======================================================//
 public function event_delete($connect,$table,$where)
 {
	 $delkey = array_keys($where);
	 $delvalue = array_values($where);
	$i = 0;
	$del_cou = "delete from $table where";
	
	foreach($where as $whr)
	{
		echo 
		$del_cou.=" ".$delkey[$i]."='".$delvalue[$i]."'";
		$i++;
	}
	$connect->query($del_cou);
	
 }
  // ==================== collection insert ======================================//
 public function collection_insert($connect,$table,$data)
 {
	 $skey = array_keys($data);
	 $sfield = implode(",",$skey);
	 $svalue =array_values($data);
	 $sfval = implode("','",$svalue);
	 
	 $ct_insert = "insert into $table($sfield) values('$sfval')";
	 $connect->query($ct_insert);
	 header('location:collection_list.php');
 }
  //================================= collection list =================================================//
 public function collection_list($connect,$table)
 {
	 $ct_list = "select * from $table";
	 $ct_ex = $connect->query($ct_list);
	 while($s_fetch = $ct_ex->fetch_object())
	 {
		 $s_row[] = $s_fetch;
	 }
	 return $s_row; 
 }

//===================================== collection update view ============================================//
 public function collection_view($connect,$table,$data)
 {
	 $sv_key = array_keys($data);
	 $sv_value = array_values($data);
	 $st_view = "select * from $table where 1=1";
	 $i = 0;
	 foreach($data as $r)
	 {
		 $st_view.=" and ".$sv_key[$i]."='".$sv_value[$i]."' ";
		 $i++;
	 }
	 $result = $connect->query($st_view);
	 while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	 return $row;
	 
 } 
 //===================================== collection update ====================================================//
 public function collection_update($connect,$table,$data,$where)
 {
	 $su_key = array_keys($data);
	 $su_value = array_values($data);
	  $wh_key = array_keys($where);
	 $wh_value = array_values($where);
	 $su_update = "update $table set";
	 $i=0;
	 $j=0;
	 $size = sizeof($data);
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."' ";
		 }
		 else
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."', ";
		 }
		 $i++;
	 }
	 $su_update.=" where";
	 foreach($where as $wh)
	 {
		 echo $su_update.=" ".$wh_key[$j]."='".$wh_value[$j]."'";
		 $j++;
	 }
	 $result = $connect->query($su_update);
	 header('location:collection_list.php');
	 
 }
  //======================================= collection delete =======================================================//
 public function collection_delete($connect,$table,$where)
 {
	 $delkey = array_keys($where);
	 $delvalue = array_values($where);
	$i = 0;
	$del_cou = "delete from $table where";
	
	foreach($where as $whr)
	{
		echo 
		$del_cou.=" ".$delkey[$i]."='".$delvalue[$i]."'";
		$i++;
	}
	$connect->query($del_cou);
	
 }
  // ==================== gallery insert ======================================//
 public function gallery_insert($connect,$table,$data)
 {
	 $skey = array_keys($data);
	 $sfield = implode(",",$skey);
	 $svalue =array_values($data);
	 $sfval = implode("','",$svalue);
	 
	 $g_videos = $_FILES['g_videos']['name'];
	 $g_photos = $_FILES['g_photos']['name'];
	 //$size = sizeof($g_videos);
	 $file_ext = explode(".",$g_photos);
	 $file_ext1 = explode(".",$g_videos);
//print_r($file_ext[1]);
//print_r($file_ext1[1]);

     if($file_ext1[1]=='PNG' || $file_ext1[1]=='png' || $file_ext1[1]=='JPG' || $file_ext1[1]=='jpg')
	 {
		 if($file_ext[1]=='PNG' || $file_ext[1]=='png' || $file_ext[1]=='JPG' || $file_ext[1]=='jpg')
		 {
			 //$image_name=time().'.'.$extension;
		$file_joint = uniqid().'.'.$file_ext[1];
		$file_joint1 = uniqid().'.'.$file_ext1[1];
		//print_r($file_joint);
		$newname1="thumbnailfolder/".$file_joint;
		$newname="imagefolder/".$file_joint1;
		
		
		$copied = copy($_FILES['g_photos']['tmp_name'], $newname1);
		$copied1 = copy($_FILES['g_videos']['tmp_name'], $newname);
		if (!$copied1) 
		{
			echo '<h3>Copy unsuccessfull!</h3>';
		}
		else 
		{
			if(!$copied)
			{
				echo '<h3>Copy unsuccessfull!</h3>'; 
			}
			else{
				$ct_insert = "insert into $table($sfield,g_photos,g_videos) values('$sfval','$newname1','$newname')";
	 $connect->query($ct_insert);
	header('location:gallery_list.php');
		echo '<h3>uploaded successfull!</h3>';
			
			}
			
		}
	 
		 }
		 else
		 {
			 echo "invalid photo format";
		 }
	 }
	 else
	 {
		 echo "invalid video format";
	 }
 
		
 }
  //================================= gallery list =================================================//
 public function gallery_list($connect,$table)
 {
	 $ct_list = "select * from $table";
	 $ct_ex = $connect->query($ct_list);
	 while($s_fetch = $ct_ex->fetch_object())
	 {
		 $s_row[] = $s_fetch;
	 }
	 return $s_row; 
 }
 //===================================== gallery update view ============================================//
 public function gallery_view($connect,$table,$data)
 {
	 $sv_key = array_keys($data);
	 $sv_value = array_values($data);
	 $st_view = "select * from $table where 1=1";
	 $i = 0;
	 foreach($data as $r)
	 {
		 $st_view.=" and ".$sv_key[$i]."='".$sv_value[$i]."' ";
		 $i++;
	 }
	 $result = $connect->query($st_view);
	 while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	 return $row;
 }
  //===================================== gallery update ====================================================//
 public function gallery_update($connect,$table,$data,$where)
 {
	 $su_key = array_keys($data);
	 $su_value = array_values($data);
	  $wh_key = array_keys($where);
	 $wh_value = array_values($where);
	 $su_update = "update $table set";
	 $i=0;
	 $j=0;
	 $size = sizeof($data);
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."' ";
		 }
		 else
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."', ";
		 }
		 $i++;
	 }
	 $su_update.=" where";
	 foreach($where as $wh)
	 {
		 echo $su_update.=" ".$wh_key[$j]."='".$wh_value[$j]."'";
		 $j++;
	 }
	 $result = $connect->query($su_update);
	 header('location:gallery_list.php');
	 
 }
 //======================================= gallery delete =======================================================//
 public function gallery_delete($connect,$table,$where)
 {
	 $delkey = array_keys($where);
	 $delvalue = array_values($where);
	$i = 0;
	$del_cou = "delete from $table where";
	
	foreach($where as $whr)
	{
		echo 
		$del_cou.=" ".$delkey[$i]."='".$delvalue[$i]."'";
		$i++;
	}
	$connect->query($del_cou);
	
 }
 // ==================== exhibition insert ======================================//
 public function exhibition_insert($connect,$table,$data)
 {
	 $skey = array_keys($data);
	 $sfield = implode(",",$skey);
	 $svalue =array_values($data);
	 $sfval = implode("','",$svalue);
	 
	echo $ct_insert = "insert into $table($sfield) values('$sfval')";
	 $connect->query($ct_insert);
	 header('location:exhibition_list.php');
 }
 //================================= exhibition list =================================================//
 public function exhibition_list($connect,$table)
 {
	 $ct_list = "select * from $table";
	 $ct_ex = $connect->query($ct_list);
	 while($s_fetch = $ct_ex->fetch_object())
	 {
		 $s_row[] = $s_fetch;
	 }
	 return $s_row; 
 }
  //===================================== exhibition update view ============================================//
 public function exhibition_view($connect,$table,$data)
 {
	 $sv_key = array_keys($data);
	 $sv_value = array_values($data);
	 $st_view = "select * from $table where 1=1";
	 $i = 0;
	 foreach($data as $r)
	 {
		 $st_view.=" and ".$sv_key[$i]."='".$sv_value[$i]."' ";
		 $i++;
	 }
	 $result = $connect->query($st_view);
	 while($res = $result->fetch_object())
	  {
		  $row[] = $res;
	  }
	 return $row;
 }
  //===================================== exhibition update ====================================================//
 public function exhibition_update($connect,$table,$data,$where)
 {
	 $su_key = array_keys($data);
	 $su_value = array_values($data);
	  $wh_key = array_keys($where);
	 $wh_value = array_values($where);
	 $su_update = "update $table set";
	 $i=0;
	 $j=0;
	 $size = sizeof($data);
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."' ";
		 }
		 else
		 {
			 $su_update.=" ".$su_key[$i]."='".$su_value[$i]."', ";
		 }
		 $i++;
	 }
	 $su_update.=" where";
	 foreach($where as $wh)
	 {
		 echo $su_update.=" ".$wh_key[$j]."='".$wh_value[$j]."'";
		 $j++;
	 }
	 $result = $connect->query($su_update);
	 header('location:exhibition_list.php');
	 
 }
  //======================================= exhibition delete =======================================================//
 public function exhibition_delete($connect,$table,$where)
 {
	 $delkey = array_keys($where);
	 $delvalue = array_values($where);
	$i = 0;
	$del_cou = "delete from $table where";
	
	foreach($where as $whr)
	{
		echo 
		$del_cou.=" ".$delkey[$i]."='".$delvalue[$i]."'";
		$i++;
	}
	$connect->query($del_cou);
	
 }
}
?>