<html><head><title> <?php echo "FOOD NAME"; ?></title>
<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:14px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #330099;
background-color:white;	
position:absolute;
left:350px;
top:10px;
}

div.black {
	background-color:black;	
	
}

div.smalltext{
	font-family: Arial, Helvetica, sans-serif;
	color: #f00;
	    font-size: 8px;
}
td {
	background-color:#ddd;
	color: #000;
	padding : 5px;
	
}

</style>


</head>

<body>
<div id = "content">
	<?php
		$host = "localhost"; 
		$dbname = "food"; 
		$dbuser = "coleman"; 
		$dbpass = "??????"; 

		$connection = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($dbname, $connection);
		$sql = "select * from food.fooddata";
		$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
		echo "$therows items selected. <br />";
		while ($row = mysql_fetch_row($result)){
				echo "<img src =img/line0.png> <br /><br />";
			echo "<table>";
			echo "<tr><td>ENTITY</td><td>DATA</td></tr>";
     		echo "<tr><td>FOOD</td><td>$row[2]</td></tr>";
			echo "<tr><td>FOOD ID</td><td>$row[3]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[4]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[5]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[6]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[7]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[8]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[9]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[10]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[11]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[12]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[13]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[14]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[15]</td></tr>";
			echo "<tr><td>FOOD</td><td>$row[16]</td></tr>";
			echo "<tr><td>FOOD</td><td><p>$row[17]</p></td></tr>";
				echo "</table>";
     		echo "$row[0] $row[1]. <br />";
     		echo "<br /><img src =img/line1.png>";
     		echo " <br /><br />";
     	
		}
	
		mysql_close($connection);
	
?>
</div>
</body>
</html>  
