

<?php
	require_once 'dtconfig.php';
		
if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$stmt_name = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT name, dob, mobile, email, photo FROM student WHERE name =:uid');
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
    <form action="dashboard.php" method="post">
    <table>
      <tr>
    	<td>Name</td>
        <!--<td><input type="text"   ></td>-->
        <td><input type="text" name="b" value="<?php echo $name ?>"></td>
    </tr>
	<tr>
    	<td>Course</td>
        <td>
        	<select name="a">
            	<option value="mme">MME</option>
                <option value="ui,ux">UI UX</option>
                <option value="fullstack">Fullstack</option>
                <option value="graphicdesign">Graphic Design</option>
                <option value="m2d">M2D</option>
                <option value="vfx">VFX</option>
            </select>
        </td>
    </tr>
   
       
       
       <td></td>
        <td ><input type="submit"></td>
        
    </tr>
    </table>
    </form>
    