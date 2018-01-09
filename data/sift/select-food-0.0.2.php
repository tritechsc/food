 
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
</tt>
</body>
</html>  
