<?php
  session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','project') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
$_SESSION["username"] = $row['username'];
        $_SESSION["username"] = $row['username'];
		$_SESSION["password"] = $row['password'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["username"])) {
    header("Location:update.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>