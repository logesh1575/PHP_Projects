<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dabconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		
		$pername = $_POST['person_name'];
		$perdob = $_POST['person_dob'];
		$permail = $_POST['person_mail'];
		
		$permob = $_POST['person_mob'];
		$peradr = $_POST['person_adr'];
		$usrname = $_POST['user_name'];
		$usrpass = $_POST['user_pass'];

	
		 if(empty($pername)){
			$errMSG = "Please Select Person name.";
		}
		else if(empty($perdob)){
			$errMSG = "Please Select Person Dob.";
		}
		else if(empty($permail)){
			$errMSG = "Please Select person Email.";
		}
		else if(empty($permob)){
			$errMSG = "Please Select Person Mobile.";
			}
		else if(empty($peradr)){
			$errMSG = "Please Select Person Address.";
		}
		else if(empty($usrname)){
			$errMSG = "Please Enter UserName.";
		}
		else if(empty($usrpass)){
			$errMSG = "Please Enter userPass.";
		}

		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
$stmt = $DB_con->prepare('INSERT INTO data(cmrname, dob, gmail, mobile , address, usname ,uspass) VALUES(:uname, :udob, :ugmail, :umobile, :uaddress,:uusname,:uuspass)');
			$stmt->bindParam(':uname',$pername);
			$stmt->bindParam(':udob',$perdob);
			$stmt->bindParam(':ugmail',$permail);
			$stmt->bindParam(':umobile',$permob);
			$stmt->bindParam(':uaddress',$peradr);
			$stmt->bindParam(':uusname',$usrname);
			$stmt->bindParam(':uuspass',$usrpass);


			
			if($stmt->execute())
			{
				$successMSG = "New Data Succesfully Inserted ...";
				header("refresh:2;erp.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="menus.php">Narmatha</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="../mysql/2-11-2024/index.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
        <li><a href="http://www.stargoldhouse.com"><span class="glyphicon glyphicon-log-in"></span> Website</a></li>
      </ul>
    </div>
    </nav>

  </div>
</nav>


<div class="container">

    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   
    <div class="col-md-3"></div>
<div class="col-md-9">
<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
    <tr>
    	<td><label class="control-label">Name</label></td>
        <td><input class="form-control" type="text" name="person_name" placeholder="Enter name" ></td>
    </tr>
    <tr>
    	<td><label class="control-label">DOB</label></td>
        <td><input class="form-control" type="date"  name="person_dob" placeholder="Enter DOB" /></td>
    </tr>
    <tr>
    	
      <td><label class="control-label">gmail</label></td>
        <td><input class="form-control" type="text" name="person_mail" placeholder="Enter G-mail"  /></td>
    </tr>
     <tr>
    	<td><label class="control-label">Mobile</label></td>
        <td><input class="form-control" type="text" name="person_mob" placeholder="Mobile Number"  /></td>
    </tr>
     <tr>
    	<td><label class="control-label">Adress</label></td>
        <td><textarea class="form-control" name="person_adr" rows="10" cols="10" placeholder="Adress"></textarea></td>
    </tr>     
  <tr>
    	<td><label class="control-label">User Name</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter name" ></td>
    </tr>
    <tr>
    	<td><label class="control-label">Password</label></td>
        <td><input class="form-control" type="password" name="user_pass" placeholder="Enter name" ></td>
    </tr>
       
    <tr>
        <td><button type="submit" name="btnsave" class="btn btn-primary btn-block">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td><td></td>
    </tr>
    
    </table>
    
</form>
   
</div>
</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="../mysql/2-11-2024/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>