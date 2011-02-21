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
		$redx = '<img src="x.png" border="0" width="20" height="20">';
		
		
		
		$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Error');
		mysql_select_db($dbname);
		$result = mysql_query("SELECT * FROM {$table}");
		if (!$result) {
		    die("Query to show fields from table failed");
		}
		
		
		$fields_num = mysql_num_fields($result);

		
		echo "<table cellpadding=\"0\" ><tr align=\"center\" style=\"background-color:6F92D9\">";
		echo "<td width=\"100\"></td>";
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
		$c = 0;
		while($row = mysql_fetch_row($result))
		{
			if($c % 2 === 1){
		    echo "<tr style=\"background-color:7DD591\">";
		    }
		    else{
		    echo "<tr style=\"background-color:FFFFFF\">";
		    }
		    $c = $c+1;
		
		    // $row is array... foreach( .. ) puts every element
		    // of $row to $cell variable
		    $stringcomp = "@";
		    foreach($row as $cell){
		    		if(strpos($cell,$stringcomp))
		    		{
		    			echo "<td width=\"100\"><a href=\"mailto:$cell\">$cell</a></td>";
		    		}
		    		elseif($cell === $row[0]){
		    			echo "<td align=\"center\" width=\"100\"><a href=\"deleteproject.php?id=$cell&name=$row[1]\">$redx</a></td>";
		    			}
		    		elseif($cell === $row[1]){
		    			echo "<td width=\"150\"><a href=\"entries.php?id=$cell\">$cell</a></td>";
		    			}
		    		else{
						echo "<td width=\"100\">$cell</td>";
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