<?php
include('db.php');
if (isset($_POST['username']) && isset($_POST['username'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
    /*
     * Set Cookie from here for one hour
     * */
    setcookie("username", $username, time()+(60));
    setcookie("password", $password, time()+(60));  /* expire in 1 hour */
	//////////////////////////////
	 $isert = "select * from tbl_user_d where user_name='$username' and user_pass='$password'";
  $res = $conn->query($isert);
  $result = $res->num_rows;
  if($result==1)
  {
	   header('location:museum_index.php');
	   
  }
  else
  {
	  echo "hi";
  }
	//////////////////////////////////
  } 
}
else {
  
	 $username = '';
  $password = '';
  
 if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
  }

  if (isset($_COOKIE['password'])) {
    $password = $_COOKIE['password'];
  }
  
}
?>
<h3 style="text-align: center;">Basic Login Script with cookie functionality</h3>
<form  action="" method="post">
  <table border="1" align="center">
    <thead>
      <tr>
        <th colspan="2">Login Here</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Username :</td>
        <td><input type="text" name="username" value="<?=$username?>"></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="password" value="<?=$password?>"></td>
      </tr>
      <tr>
        <td colspan="2">
          <label><input type="checkbox" name="remember">
            Remember Me on this PC for 1 Hour
          </label>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2"><input type="submit" name="submit" value="Login Here"></td>
      </tr>
    </tbody>
  </table>
</form>
