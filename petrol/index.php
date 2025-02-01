<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include "data.php" ?>
<title>petrol</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
table
{
	font-size:16px;
	margin-bottom:5%;
}
.jumbotron
{
	text-align:left;
	border-radius:10px;
}

</style>

<body class="container">
<div class="row">
<div class="col-md-3"></div>
<img src="img/logo.jpg" alt="" class="img-responsive">
</div>
<div class="row">
<table class="text-capitalize table-bordered table-responsive col-md-12">
<tr class="text-danger">
<td>date</td>
<td>Customer Name</td>
<td>ltr Price</td>
<td>litre</td>
<td>cost</td>
<td>cgst</td>
<td>sgst</td>
<td>cess</td>
<td>Raw Materials</td>
<td>profit</td>

</tr>
<tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer1name."</td>
<td>".$perlitre."</td>
<td>".$customer1."</td>
<td>".$customer1price."</td>
<td>".$customer1cgst."</td>
<td>".$customer1sgst."</td>
<td>".$customer1cess."</td>
<td>".$customer1rm."</td>
<td>".$customer1profit."</td>"
?>
</tr>

<tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer2name."</td>
<td>".$perlitre."</td>
<td>".$customer2."</td>
<td>".$customer2price."</td>
<td>".$customer2cgst."</td>
<td>".$customer2sgst."</td>
<td>".$customer2cess."</td>
<td>".$customer2rm."</td>
<td>".$customer2profit."</td>"
?>
</tr>

<tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer3name."</td>
<td>".$perlitre."</td>
<td>".$customer3."</td>
<td>".$customer3price."</td>
<td>".$customer3cgst."</td>
<td>".$customer3sgst."</td>
<td>".$customer3cess."</td>
<td>".$customer3rm."</td>
<td>".$customer3profit."</td>"
?>
</tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer4name."</td>
<td>".$perlitre."</td>
<td>".$customer4."</td>
<td>".$customer4price."</td>
<td>".$customer4cgst."</td>
<td>".$customer4sgst."</td>
<td>".$customer4cess."</td>
<td>".$customer4rm."</td>
<td>".$customer4profit."</td>"
?>
</tr>
</tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer5name."</td>
<td>".$perlitre."</td>
<td>".$customer5."</td>
<td>".$customer5price."</td>
<td>".$customer5cgst."</td>
<td>".$customer5sgst."</td>
<td>".$customer5cess."</td>
<td>".$customer5rm."</td>
<td>".$customer5profit."</td>"
?>
</tr>
</tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer6name."</td>
<td>".$perlitre."</td>
<td>".$customer6."</td>
<td>".$customer6price."</td>
<td>".$customer6cgst."</td>
<td>".$customer6sgst."</td>
<td>".$customer6cess."</td>
<td>".$customer6rm."</td>
<td>".$customer6profit."</td>"
?>
</tr>
</tr>
<?php
echo "<td>".date("Y/m/d")."</td>
<td>".$customer7name."</td>
<td>".$perlitre."</td>
<td>".$customer7."</td>
<td>".$customer7price."</td>
<td>".$customer7cgst."</td>
<td>".$customer7sgst."</td>
<td>".$customer7cess."</td>
<td>".$customer7rm."</td>
<td>".$customer7profit."</td>"
?>
</tr>
</table>
</div>
<div class="jumbotron text-capitalize">
<p class="text-warning"><?php echo date("d/m/Y")?></p>
<p>Total Sales : <?php echo  $totalcost ?></p>
<p>Total Litres : <?php echo $totallitre ?></p>
<p>Total Gst : <?php echo $totalgst ?></p>
<p>Total RawMaterials : <?php echo $totalrm ?></p>
<p>Total Profit : <?php echo $totalprofit ?></p>
</div>

</body>
</html>