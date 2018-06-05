<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "autocomplete";
$conn = new mysqli($localhost,$username,$password,$db);


//////////////////////////////////////////////////////
if(isset($_REQUEST['del']))
{
	////////////////////////////////////////////////////////////////////
	
	////////////////////////////////////////////////////////////////////
	$chk = $_REQUEST['chk'];
	
	$count_chk = count($chk);
	
	for($i=0;$i<$count_chk;$i++)
	{
		$del = "delete from names where id = ".$chk[$i];
		$res = $conn->query($del);
	  
	}
	//////////////////////////////////////////////////////////////////////////////////
	
	//////////////////////////////////////////////////////////////////////////////////
	
}
    $start = 0;
	$per_page = 20;
	if(!isset($_REQUEST['page']))
	{
		$page = 1;
	}
	else
	{
		$page = $_REQUEST['page'];
	}
	$start = ($page*$per_page)-$per_page;
	$prev = $page - 1;
	$next = $page + 1;
	
	$sql = "select * from names";
$result = $conn->query($sql);
$res = $result->fetch_object();
$row_result = $result->num_rows;
$num_page = $row_result/$per_page;
$np = ceil($num_page);
?>
<html>
<head>
</head>
<body>
<form method="post">
<table border="1">
<tr>
<td>Sr No</td>
<td>Id</td>
<td>Fruit</td>
<td>Human</td>
<td>Action</td>
</tr>
<?php
$sql = "select * from names limit $start,$per_page";
$result = $conn->query($sql);
$res = $result->fetch_object();
$row_result = $result->num_rows;
$i = $start+1;
$i++;
do
{
		?>
<tr>
<td><?php 
echo $i++; ?></td>
<td><?php echo $res->id; ?></td>
<td><?php echo $res->fruit; ?></td>
<td><?php echo $res->human; ?></td>
<td><input type="checkbox" name="chk[]" id="chk" value="<?php echo $res->id; ?>" /></td>
</tr>
<?php
}while($res = $result->fetch_object());
?>
<tr>

<td colspan="5"><?php if($page>1)
{
	?><a href="?page=<?php echo $prev; ?>"/>Prev</a>&nbsp;
<?php
}
if($page<$num_page)
{
?>
<a href="?page=<?php echo $next; ?>"/>Next</a>
<?php
}
?>
</td>
</tr>
<tr>
<td colspan="5"><?php $ip = 1;
while($ip<=$np)
{ 
?>
<a href="?page=<?php echo $ip; ?>"/><?php echo $ip; ?></a>
<?php
$ip++;
}
?>
</td>
</tr>
<tr>
<td colspan="5" align="right"><input type="submit" name="del" id="del" value="delete"/></td>
</tr>
</table>
</form>
</body>
</html>