<?php
include('connect.php');
 $object = new connect();
 $connect = $object->conn();
 
 
 class fullmodel
 {
	 //======================== state ==============================//
	 public function state($connect,$table)
	 {
		 $sel_state = "select * from $table";
		 $s_exe = $connect->query($sel_state);
		 while($s_fetch = $s_exe->fetch_object())
		 {
			 $row[] = $s_fetch;
		 }
		 return $row;
	 }
	 //======================== country ==============================//
	 public function country($connect,$table)
     {
		 $sel_cou = "select * from $table";
		 $c_exe = $connect->query($sel_cou);
		 while($c_fetch = $c_exe->fetch_object())
		 {
			 $row[] = $c_fetch;
		 }
		 return $row;
	 }
	 //======================== city ==============================//
	 public function city($connect,$table)
	 {
		 $sel_city = "select * from $table";
		 $ci_exe = $connect->query($sel_city);
		 while($ci_fetch = $ci_exe->fetch_object())
		 {
			 $row[] = $ci_fetch;
		 }
		 return $row;
	 }
	 //======================== user insert ==============================//
	 public function user_insert($connect,$table,$data)
	 {
		 $u_keys = array_keys($data);
		 $u_field = implode(",",$u_keys);
		 $u_values = array_values($data);
		 $ui_values = implode("','",$u_values);
		 
		 $ins_user = "insert into $table($u_field) values('$ui_values')";
		 $connect->query($ins_user);
	 }
	 //======================== user list ==============================//
	 public function user_list($connect)
	 {
		 $sel_user = "select user_id,user_name,user_pass,address,ct_name,st_name,cnt_name from tbl_user_d,tbl_city,tbl_state,tbl_country where tbl_city.ct_id = tbl_user_d.ct_id and tbl_state.st_id = tbl_user_d.st_id and tbl_country.cnt_id = tbl_user_d.cnt_id";
		 $sel_exe = $connect->query($sel_user);
		 while($sel_fetch = $sel_exe->fetch_object())
		 {
			 $row[] = $sel_fetch;
		 }
		 return $row;
	 }
	 //======================== user update select from list ==============================//
	 public function user_update_select ($connect,$table,$where)
	 {
		 $u_key = array_keys($where);
		 $u_field = implode(",",$u_key);
		 $u_values = array_values($where);
		 $u_uvalues = implode(",",$u_values);
		 $sel_update = "select * from $table where $u_field = '$u_uvalues'";
		 $s_upd_exe = $connect->query($sel_update);
		 while($upd_fetch = $s_upd_exe->fetch_object())
		 {
			 $row[] = $upd_fetch;
		 }
		 
		 return $row;
	 }
	 
 // ================================== user update =======================================//
 public function user_upd($connect,$table,$data,$where)
 {
	 $u_key = array_keys($data);
	 $u_value = array_values($data);
	 $u_keys = array_keys($where);
	 $u_values = array_values($where);
	 $i = 0;
	 $j = 0;
	 $size = sizeof($data);
	 $update1 = "update $table set ";
	 foreach($data as $dt)
	 {
		 if($size==$i+1)
		 {
		 $update1.=" ".$u_key[$i]."='".$u_value[$i]."'";
		 }
		 else
		 {
	     $update1.=" ".$u_key[$i]."='".$u_value[$i]."',";
		 }
		 $i++;
	 }
	 $update1.=" where 1=1";
	 foreach($where as $wh)
	 {
		 $update1.=" and ".$u_keys[$j]."='".$u_values[$j]."'";
	     $j++;
	 }
	$res = $connect->query($update1);
	header('location:user_list.php');
 }

}
?>