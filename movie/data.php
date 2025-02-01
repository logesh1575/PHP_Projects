<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$cinema=array(
"movie"=>array("Goat"),
"person"=>array("customer1","customer2","customer3","customer4","customer5","customer6"),
"ceat"=>array("10","11","2","3","2","15"),
"value"=>array("80","120","18","50","12","20"));


$prc=array($cinema["value"][1] *$cinema["ceat"][0],$cinema["value"][1]*$cinema["ceat"][1],
$cinema["value"][1]*$cinema["ceat"][2],$cinema["value"][1]*$cinema["ceat"][3],
$cinema["value"][1]*$cinema["ceat"][4],$cinema["value"][1]*$cinema["ceat"][5]);


$tctexes=array(
"gst"=>array($prc[0]*$cinema["value"][2]/100,$prc[1] * $cinema["value"][2]/100,
$prc[2]*$cinema["value"][2]/100,$prc[3]*$cinema["value"][2]/100,
$prc[3]*$cinema["value"][2]/100,$prc[4]*$cinema["value"][2]/100),

"distribute"=>array($prc[0]*$cinema["value"][3]/100,$prc[1]*$cinema["value"][3]/100,
$prc[2]*$cinema["value"][3]/100,$prc[3]*$cinema["value"][3]/100,
$prc[4]*$cinema["value"][3]/100,$prc[5]*$cinema["value"][3]/100),

"profit"=>array($prc[0]*$cinema["value"][4]/100,$prc[1]*$cinema["value"][4]/100,
$prc[2]*$cinema["value"][4]/100,$prc[3]*$cinema["value"][4]/100,
$prc[4]*$cinema["value"][4]/100,$prc[5]*$cinema["value"][4]/100),

"rawmat"=>array($prc[0]*$cinema["value"][5]/100,$prc[1]*$cinema["value"][5]/100,
$prc[2]*$cinema["value"][5]/100,$prc[3]*$cinema["value"][5]/100,
$prc[4]*$cinema["value"][5]/100,$prc[5]*$cinema["value"][5]/100),
);


$total=array(
$cinema["ceat"][0] + $cinema["ceat"][1] + $cinema["ceat"][2] + $cinema["ceat"][3] + $cinema["ceat"][4] + $cinema["ceat"][5],
$prc[0] + $prc[1] + $prc[2] + $prc[3] + $prc[4] + $prc[5],
$tctexes["gst"][0] + $tctexes["gst"][1] + $tctexes["gst"][2] + $tctexes["gst"][3] + $tctexes["gst"][4] + $tctexes["gst"][5],
$tctexes["rawmat"][0] + $tctexes["rawmat"][1] + $tctexes["rawmat"][2] + $tctexes["rawmat"][3] + $tctexes["rawmat"][4] + $tctexes["rawmat"][5],
$tctexes["profit"][0]+$tctexes["profit"][1]+$tctexes["profit"][2]+$tctexes["profit"][3]+$tctexes["profit"][4]+$tctexes["profit"][5],

$tctexes["distribute"][0] + $tctexes["distribute"][1] +$tctexes["distribute"][2]
+$tctexes["distribute"][3] + $tctexes["distribute"][4]+ $tctexes["distribute"][5],
);

$availble= $cinema["value"][0] - $total[0];

$pic=array($a="<img src='img/2.png'>",$b="<img src='img/3.png'>",
$c="<img src='img/4.png'>",$d="<img src='img/5.png'>",$e="<img src='img/6.png'>");








?>
</body>
</html>