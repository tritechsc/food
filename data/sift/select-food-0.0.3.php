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

div.smalltext{
	font-family: Arial, Helvetica, sans-serif;
	color: #f00;
	    font-size: 8px;
}

</style>


</head>

<body>
<div id = "content">
	<?php
		$host = "localhost"; 
		$dbname = "food"; 
		$dbuser = "coleman"; 
		$dbpass = "???????"; 

		$connection = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($dbname, $connection);
		$sql = "select * from food.fooddata";
		$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
		echo "$therows items selected .<br><br>";
		while ($row = mysql_fetch_row($result)){
   		
     			for ($i=0; $i<mysql_num_fields($result); $i++){		
       			echo "$row[$i]  <br />";
 		
					}
					echo "<br> ";
	 	}

		mysql_close($connection);
	
?>
</div>
</body>
</html>  
