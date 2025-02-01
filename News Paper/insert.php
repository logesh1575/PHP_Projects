<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'config.php';
	
	if(isset($_POST['btnsave']))
	{
		$newsdate = $_POST['news_date'];
		$newstitle = $_POST['news_title'];
		$newsdes = $_POST['news_description'];
		

		$imgFile = $_FILES['news_picture']['name'];
		$tmp_dir = $_FILES['news_picture']['tmp_name'];
		$imgSize = $_FILES['news_picture']['size'];
		
		if(empty($newsdate)){
			$errMSG = "Please Enter Name.";
		}
		else if(empty($newsdes)){
			$errMSG = "Please Enter Product Description.";
		}
		else if(empty($newstitle)){
			$errMSG = "Please Select Product Price.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand("one").".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
$stmt = $DB_con->prepare('INSERT INTO paper(date, title, picture, description) VALUES(:udate, :utit, :upic, :udes)');
			$stmt->bindParam(':udate',$newsdate);
			$stmt->bindParam(':utit',$newstitle);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':udes',$newsdes);
	


			
			if($stmt->execute())
			{
				$successMSG = "New Data Succesfully Inserted ...";
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
      <a class="navbar-brand" href="../../../logesh/14/menus.php">Narmatha</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="../../../logesh/mysql/2-11-2024/index.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
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
    	<td><label class="control-label">date</label></td>
        <td><input class="form-control" type="text" name="news_date" placeholder="Enter date"  value=" <?php echo date("d-M-Y") ?>"/></td>
    </tr>
    <tr>
    	<td><label class="control-label">title</label></td>
        <td><input class="form-control" type="text" name="news_title" placeholder="Enter "  /></td>
    </tr>
   <tr>
    	<td><label class="control-label">Image</label></td>
        <td><input class="input-group" type="file" name="news_picture" accept="image/*" /></td>
    </tr>
     <tr>
    	<td><label class="control-label">description</label></td>
        <td><input class="form-control" type="text" name="news_description" placeholder="Enter Description"> </td>
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
<script src="../../../logesh/mysql/2-11-2024/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>