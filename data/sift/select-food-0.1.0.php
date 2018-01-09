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
			echo "<table>";
			echo "<tr><td>ENTITY</td><td>DATA</td></tr>";
			echo "<img src =img/line0.png> <br /><br />";
     		echo "FOOD    : $row[2] <br />";
     		echo "FOOD ID : $row[3] <br />";
     		echo "$row[4] <br />";
     		echo "$row[5] <br />";
     		echo "$row[6] <br />";
     		echo "$row[7] <br />";
     		echo "$row[8] <br />";
     		echo "$row[9] <br />";
     		echo "$row[10] <br />";
     		echo "$row[11] <br />";
     		echo "$row[12] <br />";
     		echo "$row[13] <br />";
     		echo "$row[14] <br />";
     		echo "$row[15] <br />";
     		echo "$row[16] <br />";
     		echo "$row[17] <br />";
     		echo "$row[0] $row[1]. <br />";
     		echo "<br /><img src =img/line1.png>";
     		echo " <br /><br />";
     		echo "</table>";
		}
	
		mysql_close($connection);
	
?>
</div>
</body>
</html>  
