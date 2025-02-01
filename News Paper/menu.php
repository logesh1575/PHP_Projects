<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/one.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<img src="img/Untitled-1.png" alt="" class="img-responsive">
<div>HomeLast updated: <?php echo $date;?></div>
<div class="border">
<nav>
<ul  class="list-unstyled list-inline text-capitalize text-primary">
<li><a href="#">home u.s</a></li>
<li><a href="#">news</a></li>
<li><a href="#">sports</a></li>
<li><a href="#">showbits</a></li>
<li><a href="#">female</a></li>
<li><a href="#">science</a></li>
<li><a href="#">media</a></li>
<li><a href="#">coffebreak</a></li>
<li><a href="#">money</a></li>
<li><a href="#">travel</a></li>
<li><a href="#">columnists</a></li>
<li><a href="#">video</a></li>
<li><a href="#">health</a></li>
</ul>
</nav>
<nav>
<ul class="list-unstyled list-inline text-capitalize text-primary">
<li><a href="#">breaking news</a></li>
<li><a href="#">austrelia</a></li>
<li><a href="#">video</a></li>
<li><a href="#">you mag</a></li>
<li><a href="#">olimpics</a></li>
<li><a href="#">promos</a></li>
<li><a href="#">reward</a></li>
<li><a href="#">mail shop</a></li>
<li><a href="#">cars</a></li>
<li><a href="#">properties</a></li>
<li><a href="#">columnists</a></li>
<li><a href="#">cars</a></li>
<li><a href="#">jobs</a></li>
<li><a href="#">for you</a></li>
</ul>
</nav>
</div>


<div class="para text-primary text-justify  text-capitalize"><a href="#"><?php echo $title ?></a>
</div>
<img src="user_images/<?php echo $row['picture']; ?>" alt="pic" class="img-responsive">
<div class="text-justify"><?php echo $description ?></div>
<a href="#"><img src="img/0326bf12-1ce8-4ed5-945f-060612ba0521.jfif" alt="" class="col-md-1 col-sm-2 col-xs-3"></a>
  <ul class="nav navbar-nav navbar-right">
        <li><a href="log.php""><span class="glyphicon glyphicon-log-in"></span> update</a></li>
      </ul>
<div class="col-md-1"></div>
</div>
</body>
</html>
