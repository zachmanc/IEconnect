<?php
include 'checksession.php';
?>

<html><head><title>Projects</title></head>
<body>
	<center>
		<?php 
		include 'header.php';
		include 'connect.php';
		$table = 'projects';
		$redx = '<img src="x.png" width="20" height="20">';
		
		
		
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Error');
		mysql_select_db($dbname);
		$result = mysql_query("SELECT * FROM {$table}");
		if (!$result) {
		    die("Query to show fields from table failed");
		}
		
		
		$fields_num = mysql_num_fields($result);

		
		echo "<table width = \"800\"><tr = align\"center\">";
		echo "<td></td>";
		// printing table headers
		for($i=0; $i<$fields_num; $i++)
		{
			if ($i === 0){
				$field = mysql_fetch_field($result);
			}
			else{
		    	$field = mysql_fetch_field($result);
		   		echo "<td>{$field->name}</td>";
		    }
		}
		echo "</tr>\n";
		// printing table rows
		while($row = mysql_fetch_row($result))
		{
		    echo "<tr>";
		    //echo "<td>$redx</td>";
		
		    // $row is array... foreach( .. ) puts every element
		    // of $row to $cell variable
		    $stringcomp = "@";
		    foreach($row as $cell){
		    		if(strpos($cell,$stringcomp))
		    		{
		    			echo "<td><a href=\"mailto:$cell\">$cell</a></td>";
		    		}
		    		elseif($cell === $row[0]){
		    			echo "<td><a href=\"deleteproject.php?id=$cell\">$redx</a></td>";
		    			}
		    		else{
						echo "<td>$cell</td>";
					}
				}
		    echo "</tr>\n";
		}		
		mysql_free_result($result);
		mysql_close();
		
		include 'addproject.php';
		echo "<tr>&nbsp;</tr><tr>&nbsp;</tr>";
		
		?>
		
	</center>
</body>
</html>