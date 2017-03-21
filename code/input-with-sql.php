<?php 
session_start(); 
$_SESSION['pagename'] = "wellness_index";
include 'db.php'; include 'error.php'; 
include 'pushhits.php';

?> 

<html><head><title>  Food Data</title>
<style>
</style>


</head>

<body>

 <div class = "name">
<svg height="14" width="14">
 <circle cx="7" cy="7" r="7"  fill="#000000" />
 </svg>

<?php  
if(empty($_POST['name'])){  $name_input = "First Name";  } 
	else {	$name_input = 	$_POST['name'];	}
	
if(empty($_POST['number'])){  $number_input = " Number ";  } 
	else {	$number_input = 	$_POST['number'];	}
	echo "$name_input : $number_input<br /> ";
?>

<form  method="post">

	First Name<input type="text" name="name" maxlength="64"> 
	
	Unique Number<input type="text" name="number" maxlength="10"> 

<button type="submit">Submit</button>
</form>
 
<hr />
Developed by Craig Coleman(Tri-Tech) - 170314
</div>  <!-- conents -->

<?php
if ( $name_input != "First Name" ){
//sql input	*******************************	
			
//echo " $hostName     $databaseName  $username <br />"; 

 if (!($connection = @ mysql_pconnect($host,$user, $pass))) die("Could not connect to database");
	mysql_select_db("bulldogs", $connection);

//echo $hostname;
	
	$result = mysql_query ("SELECT CURDATE();", $connection);
	$row = mysql_fetch_row($result);$date = $row[0];
   
	$result = mysql_query ("SELECT CURTIME();", $connection);
	$row = mysql_fetch_row($result);$time = $row[0];

	$str0 = '';
	$str1 = $_SERVER['REMOTE_ADDR'];
	$str2 = $time;
	$str3 = $date;
	$str4 = $name_input . $number_input;
	$str5 =  "PHY=" . $physcial_total 
			." EMO=" . $emotional_total 
			." FIN=" .$financial_total 
			." ENV=" .$environment_total 
			." SPI=" .$spiritual_total 
			." CAR=" .$career_total 
			." SOC=" .$social_total;
	$str6 = $physcial_total+$emotional_total+$financial_total+$environment_total+$spiritual_total+$career_total+$social_total;
//echo " $str1 : $date : $time <br>"; 
$query = "INSERT INTO ttcompsci.wellness (`id`, `ip`, `timein`, `datein`, `namenumber`, `scores`,`total`) VALUES ('' ,'$str1','$str2','$str3','$str4','$str5', '$str6');";
//echo "$query";
 $result = @ mysql_query ($query, $connection)  or showerror();			
	mysql_close();
} // end if		
		
// *******************************************		

?>

</body>
</html>

