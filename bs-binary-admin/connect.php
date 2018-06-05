<?php
class connect {
	
	public function conn()
	{
		$connection = new mysqli("localhost","root","","museumeducator");
		return $connection;
	}
}
?>