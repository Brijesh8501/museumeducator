<?php
include('db.php');
/*
$file = uniqid().".docx";
$fop = fopen($file,'w');
$d = "brijesh";
fwrite($fop,$d);
fclose($fop);
echo "file created";
*/
//////////////////////////////////////////////////////////////////////////////////
     
$file = $_FILES['file']['name'];
$file_ext = explode(".",$file);
//print_r($file_ext[1]);

 
		//$image_name=time().'.'.$extension;
		$file_joint = uniqid().'.'.$file_ext[1];
		print_r($file_joint);
		$newname1="thumbnailfolder/".$file_joint;
 
		$copied = copy($_FILES['file']['tmp_name'], $newname1);
		if (!$copied) 
		{
			echo '<h3>Copy unsuccessfull!</h3>';
		}
		else 
		{
			$insert = "insert into tbl_upload (upload_id,upload_image) values('NULL','$newname1')";
			$conn->query($insert);
		echo '<h3>uploaded successfull!</h3>';
		}


?>

<html>
<head>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file" /><input type="submit" name="btn1" id="btn1" />
</form>
</body>
</html>