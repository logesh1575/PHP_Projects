<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php

$perlitre=103.44;
$profit=8.6;
$sgst=13.6;
$cgst=11.3;
$cess=4.8;

$gsttotal=29.7;

$customer1name="anwar";
$customer2name="ramya";
$customer3name="durga";
$customer4name="surya";
$customer5name="jack";
$customer6name="paul";
$customer7name="gayathri";

$customer1=3;
$customer2=6;
$customer3=10;
$customer6=1;

$customer4price=70;
$customer4=$customer4price / $perlitre;

$customer5price=30;
$customer5=$customer5price / $perlitre;

$customer7price=50;
$customer7=$customer7price / $perlitre;

$customer1price=$customer1 * $perlitre;
$customer2price=$customer2 * $perlitre;
$customer3price=$customer3 * $perlitre;
$customer6price=$customer6 * $perlitre;


$customer1gst=$customer1price * $gsttotal/100;
$customer2gst=$customer2price * $gsttotal/100;
$customer3gst=$customer3price * $gsttotal/100;
$customer4gst=$customer4price * $gsttotal/100;
$customer5gst=$customer5price * $gsttotal/100;
$customer6gst=$customer6price * $gsttotal/100;
$customer7gst=$customer7price * $gsttotal/100;


$customer1cgst=$customer1price * $cgst/100;
$customer2cgst=$customer2price * $cgst/100;
$customer3cgst=$customer3price * $cgst/100;
$customer4cgst=$customer4price * $cgst/100;
$customer5cgst=$customer5price * $cgst/100;
$customer6cgst=$customer6price * $cgst/100;
$customer7cgst=$customer7price * $cgst/100;

$customer1sgst=$customer1price * $sgst/100;
$customer2sgst=$customer2price * $sgst/100;
$customer3sgst=$customer3price * $sgst/100;
$customer4sgst=$customer4price * $sgst/100;
$customer5sgst=$customer5price * $sgst/100;
$customer6sgst=$customer6price * $sgst/100;
$customer7sgst=$customer7price * $cgst/100;


$customer1cess=$customer1price * $cess/100;
$customer2cess=$customer2price * $cess/100;
$customer3cess=$customer3price * $cess/100;
$customer4cess=$customer4price * $cess/100;
$customer5cess=$customer5price * $cess/100;
$customer6cess=$customer6price * $cess/100;
$customer7cess=$customer7price * $cess/100;


$customer1profit=$customer1price * $profit/100;
$customer2profit=$customer2price * $profit/100;
$customer3profit=$customer3price * $profit/100;
$customer4profit=$customer4price * $profit/100;
$customer5profit=$customer5price * $profit/100;
$customer6profit=$customer6price * $profit/100;
$customer7profit=$customer7price * $profit/100;

$customer1rm=$customer1price - ($customer1cgst + $customer1profit + $customer1sgst + $customer1cess);
$customer2rm=$customer2price - ($customer2cgst + $customer2profit + $customer2sgst + $customer2cess);
$customer3rm=$customer3price - ($customer3cgst + $customer3profit + $customer3sgst + $customer3cess);
$customer4rm=$customer4price - ($customer4cgst + $customer4profit + $customer4sgst + $customer4cess);
$customer5rm=$customer5price - ($customer5cgst + $customer5profit + $customer5sgst + $customer5cess);
$customer6rm=$customer6price - ($customer6cgst + $customer6profit + $customer6sgst + $customer6cess);
$customer7rm=$customer7price - ($customer7gst + $customer7profit);

$totallitre=$customer1 + $customer2 + $customer3 + $customer4 + $customer5 + $customer6 + $customer7; 
$totalcost=$customer1price + $customer2price + $customer3price + $customer4price + $customer5price + $customer6price + $customer7price;
$totalgst=$customer1gst + $customer2gst + $customer3gst + $customer4gst + $customer5gst + $customer6gst + $customer7gst;
$totalrm=$customer1rm + $customer2rm + $customer3rm + $customer4rm + $customer5rm + $customer6rm + $customer7rm;
$totalprofit=$customer1profit + $customer2profit + $customer3profit + $customer4profit + $customer5profit + $customer6profit + $customer7profit;

?>
</body>
</html>