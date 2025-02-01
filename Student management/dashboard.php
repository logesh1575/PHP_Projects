<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/structure1.css">
</head>

<body>
<?php
	require_once 'dtconfig.php';
	?>
  <?php
	if(isset($_POST['btnsave']))
	{
		$stuName = $_POST['student_name'];
		$stuMob = $_POST['student_mob'];
		$stusw = $_POST['student_sw'];
		//$stuCourse = $_POST['student_course'];
		
	$checkbox1=$_POST['techno'];	
		
		$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
		
		$stuFee = $_POST['student_fee'];
	
		if(empty($stuName)){
			$errMSG = "Please Enter Name.";
		}
		else if(empty($stuMob)){
			$errMSG = "Please Select Mobile number.";
		}
		else if(empty($stusw)){
			$errMSG = "Please Select course.";
		}
		
		else if(empty($chk)){
			$errMSG = "Please Select software.";
		}
		else if(empty($stuFee)){
			$errMSG = "Please Select Fees.";
		} 
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
$stmt = $DB_con->prepare('INSERT INTO course(stname, 	stnum, course	, software, stfees) VALUES (:uname, :umobile, :usw, :ucourse, :ufees)');
			$stmt->bindParam(':uname',$stuName);
			$stmt->bindParam(':umobile',$stuMob);
			$stmt->bindParam(':usw',$stusw);
			$stmt->bindParam(':ucourse',$chk);
			$stmt->bindParam(':ufees',$stuFee);
			
			if($stmt->execute())
			{?>
            				
<?php $successMSG = "New Data Succesfully Inserted ...";?>
			 <script>
				window.location.href='sel2.php';
				</script>
			<?php
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
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
<?php
	
	$stmt = $DB_con->prepare("SELECT name, dob, mobile, email,  photo  from student  where name ='$_POST[b]'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
		}
	}
			
			?>
            <?php
			
	$stmt = $DB_con->prepare("SELECT subject,sw1,sw2,sw3,sw4,sw5,sw6,sw7,sw8,sw9,sw10,sw11,sw12,fees from syllabus where subject ='$_POST[a]'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
		}
	}
			
			?>

<div class="container">
 <form method="post" enctype="multipart/form-data" class="form-horizontal">
	<div class="row">
    	<div class="col-md-3"></div>
    	<div class="col-md-2"><img src="image/logo.jpg" alt="" class="img-responsive img-circle"></div>
        <div class="col-md-4"><img src="image/logo-hiram.png" alt="" class="logo"></div>
        <div class="col-md-3"></div>
    </div>
    <hr>
    
    <div class="row">
    	<div class="col-md-4"></div>
        <div class="col-md-4"><h2>Student Information</h2></div>
        <div class="col-md-4"></div>
    </div>
    
    <div class="row">
    	<div class="col-md-2"></div>
        <div class="col-md-5">
        	<table height="250px">
            	<tr>
                	<td width="100px"><label>Name</label></td>
                    <td width="20px"><label>:</label></td>
                    <td><label><input  type="text" name="student_name" placeholder="Enter name" 
        value="<?php echo $name; ?>"></label></td>
                </tr>
                <tr>
                	<td><label>DOB</label></td>
                    <td><label>:</label></td>
                    <td><label><input type="text" value="<?php  echo $dob; ?>"></label></td>
                </tr>
                <tr>
                	<td><label>Mobile No</label></td>
                    <td><label>:</label></td>
                    <td><label><input  type="tel" name="student_mob" placeholder="Enter Mobile" value="<?php  echo $mobile; ?>"></label></td>
                </tr>
                <tr>
                	<td><label>Email</label></td>
                    <td><label>:</label></td>
                    <td><label><input type="text" value="<?php echo $email ; ?>"></label></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3">
        	<div class="pic"><img src="user_images/<?php echo $photo ; ?>" alt="pht" class="img-responsive img-circle"></div>
        </div>
        <div class="col-md-2"></div>
    </div>
    
    <hr>
    
    <div class="row">
    		<div class="col-md-2"></div>
            <div class="col-md-8">
            	<div class="databg">
                	<table align="center">
                    	<tr>
                        	<td width="100px"><label>Course Name</label></td>
                            <td width="20px"><label>:</label></td>
                            <td><label> <input  type="text" name="student_sw" placeholder="Enter Course" value="<?php echo $subject; ?>" /></label></td>
                        </tr>
                        <tr>
                        	<td width="100px"><label>Fees</label></td>
                            <td width="20px"><label>:</label></td>
                            <td><label><input  type="text" name="student_fee" placeholder="Enter Fees" value="<?php echo $fees; ?>" /></label></td>
                        </tr>
                    </table>
                    
                    <h3 align="center"><label>Softwares</label></h3>
                    <table align="center">
                    	<tr>
                        	<td>
   <ul class="list-unstyled soft">
<li ><?php
 if(isset($sw1))
			 {
				 if(empty($sw1)){
					
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw1.'">'.$sw1;
			 }
			 		
			 }
 ?>		</li>
 <li><?php
 if(isset($sw2))
			 {
				 if(empty($sw2)){
					
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw2.'">'.$sw2;
			 }
			 		
			 }
 ?>		</li>
<li> <?php
 if(isset($sw3))
			 {
				 if(empty($sw3)){
					  
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw3.'">'.$sw3;
			 }
			 		
			 }
 ?>		</li>
<li> <?php
 if(isset($sw4))
			 {
				 if(empty($sw4)){
					  
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw4.'">'.$sw4;
			 }
			 		
			 }
 ?>		</li>
 <li><?php
 if(isset($sw5))
			 {
				 if(empty($sw5)){
					 
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw5.'">'.$sw5;
			 }
			 		
			 }
 ?>		</li>
 <li><?php
 if(isset($sw6))
			 {
				 if(empty($sw6)){
					  
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw6.'">'.$sw6;
			 }
			 		
			 }
 ?>	</li>	
 <li><?php
 if(isset($sw7))
			 {
				 if(empty($sw7)){
					  
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw7.'">'.$sw7;
			 }
			 		
			 }
 ?>	</li>
 <li>	
 <?php
 if(isset($sw8))
			 {
				 if(empty($sw8)){
					 
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw8.'">'.$sw8;
			 }
			 		
			 }
 ?>	</li>
 <li>	
 <?php
 if(isset($sw9))
			 {
				 if(empty($sw9)){
					 
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw9.'">'.$sw9;
			 }
			 		
			 }
 ?>	</li>
 <li>	
 <?php
 if(isset($sw10))
			 {
				 if(empty($sw10)){
					  
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw10.'">'.$sw10;
			 }
			 		
			 }
 ?>	</li>
 <li>	
 <?php
 if(isset($sw11))
			 {
				 if(empty($sw11)){
					
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value="'.$sw1.'">'.$sw11;
			 }
			 		
			 }
 ?>	</li>
 <li>	
 <?php
 if(isset($sw12))
			 {
				 if(empty($sw12)){
					  
			
			 }
			 else
			 {
				  echo '<input type="checkbox" name="techno[]" value=" '.$sw12.' ">'.$sw12 ;
			 }
			 		
			 }
 ?>		</li>
 </ul>
                            </td>
                        </tr>
                        <tr>
                        <td><button type="submit" name="btnsave" class="btn btn-primary ">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
                        </tr>
                    </table>
                 
                          
                </div>
            </div>
            <div class="col-md-2"></div>
    </div>
  </form>  
</div>
</body>
</html>
