
<html>
<head>
<meta charset="utf-8">
<title>Cinemas</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
include "data.php" 
?>

<style>
img
{
	height:150px;
	width:150px;
}
</style>
<script>
function three(obj)
{

	alert("Total sales : <?php echo $total[1] ?>");
}
function two(obj)
{
	alert("Total sales : <?php echo $total[1] ?>"  );
}
function four(obj)
{
	alert("Total sales : <?php echo $total[1] ?>" );
}
function five(obj)
{
	alert("Total sales : <?php echo $total[1] ?>");
}
function one(obj)
{
	alert("Total sales : <?php echo $total[1] ?>");
}
</script>
</head>

<body>

<body class="container">
<div class="row">
<div class="col-md-2"></div>
<img src="img/title.png" alt="">
<div class="col-md-3"></div>

</div>
<div class="row">
<table class="text-capitalize table-bordered table-responsive col-md-12">
<tr class="text-danger">
<td>Movie Name</td>
<td>Customer</td>
<td>Ticket Price</td>
<td>Seats Book</td>
<td>Cost</td>
<td>Gst</td>
<td>Distributor</td>
<td>Raw Materials</td>
<td>Profit</td>
</tr>

<tr>
<?php
echo "<td>".$cinema["movie"][0]."</td>
<td>".$cinema["person"][0]."</td>
<td>".$cinema["value"][1]."</td>
<td>".$cinema["ceat"][0]."</td>
<td>".$prc[0]."</td>
<td>".$tctexes["gst"][0]."</td>
<td>".$tctexes["distribute"][0]."</td>
<td>".$tctexes["rawmat"][0]."</td>
<td>".$tctexes["profit"][0]."</td>"
?>
</tr>

<tr>
<?php
echo "<td>".$cinema["movie"][0]."</td>
<td>".$cinema["person"][1]."</td>
<td>".$cinema["value"][1]."</td>
<td>".$cinema["ceat"][1]."</td>
<td>".$prc[1]."</td>
<td>".$tctexes["gst"][1]."</td>
<td>".$tctexes["distribute"][1]."</td>
<td>".$tctexes["rawmat"][1]."</td>
<td>".$tctexes["profit"][1]."</td>"
?>
</tr>

<tr>
<?php
echo "<td>".$cinema["movie"][0]."</td>
<td>".$cinema["person"][2]."</td>
<td>".$cinema["value"][1]."</td>
<td>".$cinema["ceat"][2]."</td>
<td>".$prc[2]."</td>
<td>".$tctexes["gst"][2]."</td>
<td>".$tctexes["distribute"][2]."</td>
<td>".$tctexes["rawmat"][2]."</td>
<td>".$tctexes["profit"][2]."</td>"
?>
</tr>

<tr>
<?php
echo "<td>".$cinema["movie"][0]."</td>
<td>".$cinema["person"][3]."</td>
<td>".$cinema["value"][1]."</td>
<td>".$cinema["ceat"][3]."</td>
<td>".$prc[3]."</td>
<td>".$tctexes["gst"][3]."</td>
<td>".$tctexes["distribute"][3]."</td>
<td>".$tctexes["rawmat"][3]."</td>
<td>".$tctexes["profit"][3]."</td>"
?>
</tr>

<tr>
<?php
echo "<td>".$cinema["movie"][0]."</td>
<td>".$cinema["person"][4]."</td>
<td>".$cinema["value"][1]."</td>
<td>".$cinema["ceat"][4]."</td>
<td>".$prc[4]."</td>
<td>".$tctexes["gst"][4]."</td>
<td>".$tctexes["distribute"][4]."</td>
<td>".$tctexes["rawmat"][4]."</td>
<td>".$tctexes["profit"][4]."</td>"
?>
</tr>
<tr>
<?php
echo "<td>".$cinema["movie"][0]."</td>
<td>".$cinema["person"][5]."</td>
<td>".$cinema["value"][1]."</td>
<td>".$cinema["ceat"][5]."</td>
<td>".$prc[5]."</td>
<td>".$tctexes["gst"][5]."</td>
<td>".$tctexes["distribute"][5]."</td>
<td>".$tctexes["rawmat"][5]."</td>
<td>".$tctexes["profit"][5]."</td>"
?>
</tr>
</table>
</div>
<div class="jumbotron" >
<h2>Movie Name : <?php echo $cinema["movie"][0] ?></h2>
<h2>Booked seats : <?php echo $total[0] ?></h2>
<h2>Available seats : <?php echo $availble ?></h2>

<h4><?php
if($total[0]==80)
echo $pic[0];

elseif ($total[0]>56 && $total[0]<79)
echo $pic[3];

elseif ($total[0]>=40 && $total[0]<55)
echo $pic[2];


elseif ($total[0]>=20 && $total[0]<39)
echo $pic[4];


else
echo $pic[1];

?></h4>


<h4>
<?php
if($total[1]>9000 &&$total[1]>=9600)
echo "<h2 onMouseMove='three(this)' id='one'>Today sale</h2>";

elseif($total[1]>6000 && $total[1]<8999)
echo "<h2 onMouseMove='two(this)'>Today sale</h2>";


elseif($total[1]>4500 && $total[1]<5999)
echo "<h2 onMouseMove='four(this)'>Today sale</h2>";

elseif($total[1]>2880 && $total[1]<4499)
echo "<h2 onMouseMove='five(this)'>Today sale</h2>";

else
echo "<h2 onMouseMove='one(this)'>Today sale</h2>";
?>
</h4>



<h2>Total gst : <?php echo $total[2] ?></h2>
<h2>Total RawMaterials : <?php echo $total[3]  ?></h2>
<h2>Distributors Taken : <?php echo $total[5] ?></h2>
<h2>Total Profit : <?php echo $total[4] ?></h2>
</div>

</body>
</html>