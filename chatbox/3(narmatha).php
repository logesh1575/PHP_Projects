<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","project");
if ($con->connect_error) {
die("Connection failed: " .$con->connect_error);
}
$narmatha=$_POST['narmatha'];
$logesh=$_POST['logesh'];

$in_ch=mysqli_query($con,"insert into chatbox(narmatha,logesh)values('$narmatha','$logesh')");  
if($in_ch==1)  
{

$sql = "SELECT * FROM chatbox";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 echo " <table align='center'>
					<tr>
							<td width='100' class='bg-success text-center'>" . $row["logesh"]."</td>
						
					</tr>
					<tr>
							<td width='100'></td>
							<td width='100'><p class='bg-primary text-white text-center'>" . $row["narmatha"]."</p></td>
					</tr>
	  </table>";
  }
} else {
  echo "No Data Available";
}
}
?>
<form method="post">
<table align="center">
<tr>
<td><input type="text" name="narmatha"></td>
 <td> <input type="submit" value="SignUp"></td>
</tr>

</table>
</form>
</body>
</html>