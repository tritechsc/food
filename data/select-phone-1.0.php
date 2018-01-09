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
color: #000;
background-color:white;	
position:absolute;
left:50px;
top:50px;
width:600px;
}

div.label {
	background-color:#fff;	
	color: #777;
	border-style: solid;
    border-color: #ddd #ddd;
    padding: 5px;
	
}


div.bolddata {

	font-weight: bold;
   
	
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
		include 'db/db.php';
		include 'db/error.php'; 
		

		$connection = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($dbname, $connection);
		$sql = "select * from food.fooddata";
		$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
		echo "$therows items selected. <br />";
		while ($row = mysql_fetch_row($result)){
				echo "<div class =label >FOOD TYPE: ";		
					echo "<span style=color:#000;font-weight:bold>$row[2] </span></div><br />";
				echo "<div class =label >FOOD ID	: ";
					echo "$row[3] </div><br />";		
				echo "<div class =label >FERTILIZER QUANTITY : ";
					echo "$row[4] </div><br />";		
				echo "<div class =label >FERTILIZER TYPE : ";	
					echo "$row[5] </div><br />";	
				echo "<div class =label >PESTICIDE QUANTITY : ";	
					echo "$row[6] </div><br />";
				echo "<div class =label >PESTICIDE TYPE : ";	
					echo "$row[7] </div><br />";		
				echo "<div class =label >PESTICIDE INTERVAL : ";
					echo "$row[8] </div><br />" ;		
				echo "<div class =label >WATER QUANTITY  : ";	
					echo "$row[9] </div><br />"	;		
				echo "<div class =label >WATER TYPE : ";
					echo "$row[10] </div><br />";					
				echo "<div class =label >WATER INTERVAL : ";
					echo "$row[11] </div><br />";		
				echo "<div class =label >DELIVERY METHOD  : ";
					echo "$row[12] </div><br />";		
				echo "<div class =label >DELIVERY DISTANCE  : ";
					echo "$row[13] </div><br />";			
				echo "<div class =label >DELIVERY WASTE % : ";
					echo "$row[14] </div><br />";	
				echo "<div class =label >GMO  :  ";
					echo "$row[15] </div><br />";
				echo "<div class =label >COMMENTS : ";
					echo "$row[16] </div><br />";
				echo "<div class =label >$row[0] $row[1]. </div>";
				echo " <br /><br />";
     	
		}
	
		mysql_close($connection);
	
?>
</div>
</body>
</html>  
