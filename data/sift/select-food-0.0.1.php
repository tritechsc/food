 
 <?php
$host = "localhost"; 
$dbname = "food"; 
$dbuser = "coleman"; 
$dbpass = "??????"; 
$connection = mysql_connect($host, $dbuser, $dbpass) or die("Could not connect to database server"); 
mysql_select_db($dbname, $connection) or die("Could not select database"); 

$sql_select_all = "select * from food.fooddata order by id desc;";


$result = mysql_query ($sql_select_all , $connection);

$row = mysql_fetch_row($result);
$code = $row[0];
   		echo "$code ";
	mysql_close();
 
 ?>
