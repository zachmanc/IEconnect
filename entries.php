<?php
include 'checksession.php';
?>

<?php 
		echo "<html><head><title>Specifc Project</title></head><body><center>";
		include 'header.php';
		include 'connect.php';
		
		$gid = $_GET['id'];
		
		$table = $gid;
		$redx = '<img src="x.png" width="20" height="20">';
		
		echo $gid;
		
		$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Error');
		mysql_select_db($dbname);
		$result = mysql_query("SELECT * FROM `$table`");
		if (!$result) {
		    die("Query to show fields from table failed");
		}
		
		
		$fields_num = mysql_num_fields($result);

		
		echo "<table width = \"800\"><tr align\"center\">";
		echo "<td></td>";
		// printing table headers
		for($i=0; $i<$fields_num; $i++)
		{
			if ($i === 0){
				$field = mysql_fetch_field($result);
			}
			else{
		    	$field = mysql_fetch_field($result);
		   		echo "<td align=\"left\">{$field->name}</td>";
		    }
		}
		echo "</tr>\n";
		// printing table rows
		while($row = mysql_fetch_row($result))
		{
		    echo "<tr>";
		
		    // $row is array... foreach( .. ) puts every element
		    // of $row to $cell variable
		    $stringcomp = "@";
		    $co = 0;
		    foreach($row as $cell){
		    		if(strpos($cell,$stringcomp))
		    		{
		    			echo "<td><a href=\"mailto:$cell\">$cell</a></td>";
		    		}
		    		elseif($cell === $row[0] && $co === 0){
		    			echo "<td><a href=\"\">$redx</a></td>";
		    			$co = 1;
		    			}
		    		else{
						echo "<td>$cell</td>";
					}
				}
		    echo "</tr>\n";
		}		
		mysql_free_result($result);
		mysql_close();
		
		include 'addentries.php';
		echo "<tr>&nbsp;</tr><tr>&nbsp;</tr>";
		
		?>
		
	</center>
</body>
</html>