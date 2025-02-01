
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
									include 'menu.php';
			
		}
		?>
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
