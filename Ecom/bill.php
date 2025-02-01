
<link rel="stylesheet" type="text/css" href="css/design.css">

<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'dabconfig.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$stmt_name = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT name, description, price, picture ,gst , discount FROM product WHERE name =:uid');
		$stmt_edit->execute(array(':uid'=>$stmt_name));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		
	?>
<div class="bg">
<div class="box">
	<img src="user_images/<?php echo $picture; ?>" class="proimg" >
 
</div>

<div class="box">   
    <div class="proname"><?php echo $name ?></div>
    <div class="prodes"><?php echo $description ?></div>
    <div class="proprice"><?php echo "Rs. "  . $price ?></div>
    
    <div class="prodGst"><?php echo "GST : " . $gst; ?></div>
    <div class="prodDis"><?php echo "Discount" . " : " .$discount ?></div>
    
    <!--<div class="buy"><?php //echo "<a href='usr.php'>Buy Now</a>" ?></div>-->
    <a class=" addToCart text-center center-block btn btn-default buy"  href="dd.php?edit_id=<?php echo $edit_row['name']; ?>" 
title="click to add" onclick="return confirm('Add to this <?php echo $edit_row['name']; ?>')">
<span ></span> BUY <?php echo $edit_row['name']; ?></a>
 </div>
 </div>   
 
 

 <?php   
 $gt=$gst;
 $dis=$discount;
$progst=$price * $gt/100;
$total=$price+$progst;
$dis1=$total * $dis/100;
$cost=$total-$dis1;
 ?>   
   
<p>Price : <?php echo  $price ?></p>
<p>GST : <?php echo $progst ?></p>
<p>Total Price : <?php echo $total ?></p>
<p>Discount : <?php echo $dis1 ?></p>
<p>Price : <?php echo $cost ?></p>

    
    		
	<?php	
	}
	else
	{
    ?>
		
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
   <?php      
	}
    
    
  
	
    ?>

	<?php
	/*
	if(isset($_POST['btn_save_updates']))
	{
		$userid = $_POST['product_id'];
		$userdate = $_POST['product_type'];
		$usertype = $_POST['product_gram'];
					
		$imgFile = $_FILES['product_picture']['name'];
		$tmp_dir = $_FILES['product_picture']['tmp_name'];
		$imgSize = $_FILES['product_picture']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'user_images/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['picture']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			// if no image selected the old image remain as it is.
			$userpic = $edit_row['picture']; // old image from database
		}	
						
		
	
		
						
	}
	<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- custom stylesheet -->


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-1.11.3-jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="menus.php">Logesh</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
        <li><a href="http://www.stargoldhouse.com"><span class="glyphicon glyphicon-log-in"></span> Website</a></li>
      </ul>
    </div>
    </nav>


  </div>
</nav>
<div class="container">


<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Name</label></td>
        <td><input class="form-control" type="text" name="product_id" value="<?php echo $name; ?>" readonly /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Description</label></td>
        <td><input class="form-control" type="text" name="product_type" value="<?php echo $description; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Pricet</label></td>
        <td><input class="form-control" type="text" name="product_gram" value="<?php echo $price; ?>" required /></td>
    </tr>

    
    <tr>
    	<td><label class="control-label">Product Image</label></td>
        <td>
        	<p><img src="user_images/<?php echo $picture; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="product_picture" accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-default" href="stock.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
*/
	
	
	?>
