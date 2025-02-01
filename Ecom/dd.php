

<?php
	require_once 'dabconfig.php';
		
if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$stmt_name = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT name, description, price, picture ,gst , discount FROM product WHERE name =:uid');
		$stmt_edit->execute(array(':uid'=>$stmt_name));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	?>
    
    <?php
	
     //echo $description ; 
    }
	

	   else
	{
		echo "no";
	}
	?>
    <form action="gst.php" method="post">
    <table>
	<tr>
    	<td>Customer Name</td>
        <td><input type="text" name="a"></td>
    </tr>
     <tr>
    	<td>Product Name</td>
        <!--<td><input type="text"   ></td>-->
        <td><select name="b" >
        <option><?php echo $name ?></option>
        </select></td>
    </tr>
       
       
       <td></td>
        <td ><input type="submit"></td>
        
    </tr>
    </table>
    </form>
    