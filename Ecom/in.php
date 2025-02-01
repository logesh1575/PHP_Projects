<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dabconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		$proName = $_POST['product_name'];
		$proDesc = $_POST['product_desc'];
		$proPrice = $_POST['product_price'];
		
		$progst = $_POST['product_gst'];
		$prodis = $_POST['product_discount'];

		$imgFile = $_FILES['product_picture']['name'];
		$tmp_dir = $_FILES['product_picture']['tmp_name'];
		$imgSize = $_FILES['product_picture']['size'];
		
		if(empty($proName)){
			$errMSG = "Please Enter Name.";
		}
		else if(empty($proDesc)){
			$errMSG = "Please Enter Product Description.";
		}
		else if(empty($proPrice)){
			$errMSG = "Please Select Product Price.";
		}
		else if(empty($progst)){
			$errMSG = "Please Select Product gst.";
		}
		else if(empty($prodis)){
			$errMSG = "Please Select product discount.";
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
			$userpic = rand(1000,1000000).".".$imgExt;
				
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
$stmt = $DB_con->prepare('INSERT INTO product(name, description, price, image,gst,discount) VALUES(:uname, :udesc, :uprice, :upic,:ugst,:udis)');
			$stmt->bindParam(':uname',$proName);
			$stmt->bindParam(':udesc',$proDesc);
			$stmt->bindParam(':uprice',$proPrice);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':ugst',$progst);
			$stmt->bindParam(':udis',$prodis);


			
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
        <td><input class="form-control" type="text" name="product_name" placeholder="Enter name" 
        value="<?php echo $proName; ?>" /></td>
    </tr>
    <tr>
    	<td><label class="control-label">Description</label></td>
        <td><input class="form-control" type="text" name="product_desc" placeholder="Enter Description" value="<?php echo $proDesc; ?>" /></td>
    </tr>
    <tr>
    	<td><label class="control-label">Price</label></td>
        <td><input class="form-control" type="text" name="product_price" placeholder="Enter Price" value="<?php echo $proPrice; ?>" /></td>
    </tr>
     <tr>
    	<td><label class="control-label">gst</label></td>
        <td><input class="form-control" type="text" name="product_gst" placeholder="Enter Price" value="<?php echo $progst; ?>" /></td>
    </tr>
     <tr>
    	<td><label class="control-label">discount</label></td>
        <td><input class="form-control" type="text" name="product_discount" placeholder="Enter Price" value="<?php echo $prodis; ?>" /></td>
    </tr>     
    <tr>
    	<td><label class="control-label">Product Image</label></td>
        <td><input class="input-group" type="file" name="product_picture" accept="image/*" /></td>
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