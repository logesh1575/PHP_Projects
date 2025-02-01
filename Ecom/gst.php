



 <?php
	require_once 'dabconfig.php';
	
	//error_reporting(0);
		
		
    
    
  ?>  
<!--    
<form method="post">
<table>
	<tr>
    	<td>Customer Name</td>
        <td><input type="text" name="a"></td>
    </tr>
       
    <tr>
    	<td>Product Name</td>
        <td><input type="text" name="b" value="" ></td>
    </tr>
    <tr>
    <td></td>
        <td ><input type="submit"></td>
        
    </tr>
    </table>
    </form> -->
    <?php
  	$stmt = $DB_con->prepare("SELECT cmrname, dob, gmail, mobile , address FROM data where cmrname ='$_POST[a]'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
		}
	}
	else
	{
		echo"noop";
	}
		?>
		    <?php
   	$stmt = $DB_con->prepare("SELECT name, 	description, price, picture , gst , discount FROM product where name ='$_POST[b]'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
		}
	}
	else
	{
		echo"noop";
	}
	
		?>
<?php
$gstprc = $price * $gst/100;
$dsc = $price * $discount/100;
$mrp = $gstprc + $price;
$total= $mrp - $dsc;
		
		
?>
<?php echo date("d-m-Y") ?>
<p>Customer  : <?php echo  $cmrname ?></p>
<p>Mobile : <?php echo $mobile ?></p>
<p>Gmail : <?php echo $gmail ?></p>
<p>Address : <?php echo $address ?></p>
<table>
<tr><td><img src="user_images/<?php echo $picture; ?>" ></td></tr>
<tr align="center"><th><?php echo $name ?></th></tr>
<tr align="center"><td><?php echo $description ?></td></tr>
</table>

<table border="1">

<tr>
<th>rate</th>
<th>gst</th>
<th>mrp</th>
<th>discount</th>
</tr>

<tr>
<td><?php echo $price ?></td>
<td><?php echo $gstprc ?></td>
<td><?php echo $mrp ?></td>
<td><?php echo $dsc ?></td>

</tr>
</table>

<p> Price : <?php  echo $total ?></p>



