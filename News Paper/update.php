<?php
 require_once 'config.php';


	$stmt = $DB_con->prepare('SELECT date, title, picture, description FROM paper');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			{
			}
		}
	}

if(isset($_POST['btn_save_updates']))
	{
		$newsdate = $_POST['news_date'];
		$newstitle = $_POST['news_title'];
		$newsdes = $_POST['news_description'];
		

		$imgFile = $_FILES['news_picture']['name'];
		$tmp_dir = $_FILES['news_picture']['tmp_name'];
		$imgSize = $_FILES['news_picture']['size'];
					
		if($imgFile)
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
			$stmt = $DB_con->prepare('UPDATE paper
									     SET date=:udate, 
										 	title=:utit, 
											 picture=:upic,
										     description=:udes');
			$stmt->bindParam(':udate',$newsdate);
			$stmt->bindParam(':utit',$newstitle);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':udes',$newsdes);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Update');
				window.location.href='logout.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
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


<!-- custom stylesheet -->
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-1.11.3-jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="menus.php">news upadate</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
    	<td><label class="control-label">date</label></td>
        <td><input class="form-control" type="text" name="news_date" placeholder="Enter date"  value=" <?php echo date("d-M-Y") ?>"/></td>
    </tr>
    
  
    
     <tr>
    	<td><label class="control-label">title</label></td>
        <td>
        <textarea class="form-control" name="news_title" rows="5" cols="10" placeholder="Enter tittle"><?php echo $title ?></textarea>
       </td>

   <tr>
    	<td><label class="control-label">description</label></td>
              <td>  <textarea class="form-control" name="news_description" rows="10" cols="10" placeholder="Enter tittle"><?php echo $description ?></textarea>
</td>
    </tr>   
    
    <tr>
    	<td><label class="control-label">news Image</label></td>
        <td>
        	<p><img src="user_images/<?php echo $picture; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="news_picture"  accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> Update
        </button> </td>
    </tr>
    
    </table>
    
</form>

</div>
</div>
</body>