<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "museumeducator";
$conn = new mysqli($hostname,$username,$password,$db);

if(isset($_REQUEST['tckt']))
{
	
	$checkticket = $_REQUEST['checkticket'];
	$time = $_REQUEST['time'];
	$date = date('Y-m-d');
	$chck = implode("-",$checkticket);
//	$chck1 = explode("-",$chck);
	
	
	
	$sql = "insert into book_ticket (`Book_Id`,`Book_Date`,`Show_Time`,`Seat_No`) values('NULL','$date','$time','$chck')";
	$result = $conn->query($sql);
	
	
}
?>
<html>
<head>
<style type="text/css">
#submain
{
	background-color:#C36;
	float:left;
	width:55px;
}
#timing
{
	background-color: #09F;
	text-align:left;
	margin-left:auto;
	margin-right:auto;
	padding-top:5px;
	padding-bottom:5px;
	width:605px;
	
}
b
{
	background-color:#999;
	
}
#submitticket
{
	background-color: #09F;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
	padding-top:5px;
	padding-bottom:5px;
	width:605px;
	
}
#main
{
	background-color:#CCC;
	width:605px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
}
</style>
</head>
<body>
<form method="post">
<div id="timing">
<select name="time" id="time">
<option value="">--Select Timing--</option>
<option value="11:00 Am To 2:00 Pm">11:00 Am To 2:00 Pm</option>
<option value="2:30 Pm To 4:30 Pm">2:30 Pm To 4:30 Pm</option>
<option value="5:00 Pm To 7:00 Pm">5:00 Pm To 7:00 Pm</option>
</select>
<b><?php echo date('Y-m-d'); ?></b>
</div>
<div id="main">
<?php
$date = date('Y-m-d');
//////////////////////
	$sql = "select * from book_ticket where Book_Date = '$date' AND Show_Time = '$time'";
	$res = $conn->query($sql);
	$total_row = $res->num_rows;
	
		do { 
		if($total_row==0)
		{
	$checked = "";
			$disabled = "";
		}
		else
		{
			 $checked = "checked='checked'";
	 $disabled = "Disabled='disabled'";
			
		}
$j = 'A';
for($i=0;$i<=10;$i++)
{
	
	?>
    <div id="submain"><label><input type="checkbox" name="checkticket[]" id="checkticket" value="<?php echo $j.''.$i; ?>" <?php echo $checked; echo $disabled; ?>/></label>
    <?php
	echo $j.''.$i;
	?>
    </div>
    <?php
}
		}
		while($row_result = $res->fetch_object());
//////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<br /><br />
<?php
$j = 'B';
for($i=0;$i<=10;$i++)
{
	?>
    <div id="submain"><label><input type="checkbox" name="checkticket[]" id="checkticket" value="<?php echo $j.''.$i; ?>" /></label>
    <?php
	echo $j.''.$i;
	?>
    </div>
    <?php
}
?>
<br /><br />
<?php
$j = 'C';
for($i=0;$i<=10;$i++)
{
	?>
    <div id="submain"><label><input type="checkbox" name="checkticket[]" id="checkticket" value="<?php echo $j.''.$i; ?>" /></label>
    <?php
	echo $j.''.$i;
	?>
    </div>
    <?php
}
?>
<br /><br />
<?php
$j = 'D';
for($i=0;$i<=10;$i++)
{
	?>
    <div id="submain"><input type="checkbox" name="checkticket[]" id="checkticket" value="<?php echo $j.''.$i; ?>" />
    <?php
	echo $j.''.$i;
	?>
    </div>
    <?php
}
?>
</div>
<br /><br />
<div id="submitticket">
<input type="submit" name="tckt" id="tckt" value="Book Ticket" onclick="return confirm('Sure are you want to book ticket')" />
</div>
</form>
</body>
</html>