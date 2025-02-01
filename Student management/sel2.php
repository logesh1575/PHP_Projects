<?php

	require_once 'dtconfig.php';

/*	if(isset($_GET['add_id']) && !empty($_GET['add_id']))
	{
		$stmt_name = $_GET['add_id'];
		$stmt_edit = $DB_con->prepare('SELECT name, description, price, image , gst, discount FROM product WHERE name =:uid');
		$stmt_edit->execute(array(':uid'=>$stmt_name));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: bill.php");
	} */
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
<style>
.logo
{
	margin-top:40px;
}
</style>
 <div class="row">
    	<div class="col-md-3"></div>
    	<div class="col-md-2"><img src="image/logo.jpg" alt="" class="img-responsive img-circle"></div>
        <div class="col-md-5"><img src="image/logo-hiram.png" alt="" class="logo"></div>
        <div class="col-md-3"></div>
    </div>
<?php
	
	$stmt = $DB_con->prepare('SELECT name, dob, mobile, email,  photo FROM student ORDER BY name DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
           

    <table border="1" align="center">
    <tr>
    <td><img src="user_images/<?php echo $row['photo']; ?>" style="height:110px; width:200px;"></td>
    
    </tr>
    
    <tr align="center">
    <td><?php echo $name ?></td>
    </tr>
        <tr align="center">
    <td><?php echo $dob ?></td>
    </tr>

    <tr align="center">
    <td><?php echo $mobile ?></td>
    </tr>

    <tr align="center">
    <td><?php echo $email ?></td>
    </tr>

       <tr>
    <td>  <a class=" addToCart text-center center-block btn btn-default"  href="nxt.php?edit_id=<?php echo $row['name']; ?>" 
title="click to add" onclick="return confirm('Add to this <?php echo $row['name']; ?>')">
<span ></span> click <?php echo $row['name']; ?></a></td>
    </tr>

    </table>
	
                
                <!--<a class="btn btn-info" href="stockbill.php?edit_id=<?php// echo $row['id']; ?>" title="click for edit" onclick="return confirm('Sure! You want this <?php //echo $row['type']; ?> to Make Bill?')"><span class="glyphicon glyphicon-edit"></span>Make this <?php// echo $row['type']; ?> for Bill</a> -->
				</span></div>
    <hr>
    			<?php
		}
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
</div>
</body>
</html>