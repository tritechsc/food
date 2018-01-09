<?php 
session_start(); 
//$_SESSION['pagename'] = "form_index";
include 'db/db.php';
include 'db/error.php'; 
//include 'db/pushhits.php';

?> 

<html><head><title> Form Input </title>
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
top:100px;
}


</style>


</head>

<body>
<div id = "content">
FOOD DATA INPUT
<br />
<?php
echo "$host -  $user - $pass - $database <br />";
 if (!($connection = @ mysql_pconnect($host,$user, $pass))) die("Could not connect to database");
	mysql_select_db("food", $connection);

	$result = mysql_query ("SELECT CURDATE();", $connection);
	$row = mysql_fetch_row($result);$date = $row[0];
   
	$result = mysql_query ("SELECT CURTIME();", $connection);
	$row = mysql_fetch_row($result);$time = $row[0];

	$str_time = $time;
	$str_date = $date;

//echo " $str1 : $date : $time <br>"; 

//echo "$query";
// $result = @ mysql_query ($query, $connection)  or showerror();			
	mysql_close();
}
?>

<?php

if(isset($_POST['submit'])){
	$last_input = 	$_POST['last'];
	$first_input = 	$_POST['first'];
	$food_input = $_POST['food'];
	$food_id_input = $_POST['food-id'];
	$fert_quantity_input = $_POST['fert-quantity'];
	$fert_type_input = $_POST['fert-type'];
	$pest_quantity_input = $_POST['pest-quantity'];
	$pest_type_input = $_POST['pest-type'];
	$pest_interval_input = $_POST['pest-interval'];
	$water_quantity_input = $_POST['water-quantity'];
	$water_type_input = $_POST['water-type'];
	$water_interval_input = $_POST['water-interval'];
	$del_method_input = $_POST['del-method'];
	$del_distance_input = $_POST['del-distance'];
	$del_waste_input = $_POST['del-waste'];
	$gmo_input = $_POST['gmo'];
	$comments_input = $_POST['comments'];
	}

	//$str_time = $time;
	//$str_date = $date;
	//$str18 = $time."-".$date;
	
	echo "$last_input <br />";
	echo "$first_input<br />";
	echo "$food_input <br />";
	echo "$food_id_input <br />";
	echo "$fert_quantity_input<br />"; 
	echo "$fert_type_input <br />";
	echo "$pest_quantity_input<br />";
	echo "$pest_type_input <br />";
	echo "$pest_interval_input <br />";
	echo "$water_quantity_input <br />";
	echo "$water_type_input <br />";
	echo "$water_interval_input <br />";
	echo "$del_method_input <br />";
	echo "$del_distance_input <br />";
	echo "$del_waste_input <br />";
	echo "$gmo_input <br />";
	echo "$comments_input <br />";

	echo "<hr />";
	//echo "$str18 <br />";



?>
1		LAST NAME				
2		FIRST INITIAL 			
3		FOOD TYPE		
4		FOOD ID		
5		FERTILIZER QUANTITY 	
6		FERTILIZER TYPE  		
7		PESTICIDE QUANTITY 		
8		PESTICIDE TYPE 			
9		PESTICIDE INTERVAL 		
10		WATER QUANTITY 			
11		WATER TYPE 				
12		WATER INTERVAL 			
13		DELIVERY METHOD 		
14		DELIVERY DISTANCE 		
15		DELIVERY WASTE % 
16		GMO 
17 		COMMENTS
18		DATE AND TIME		

<form action="#" method="post">
	<pre>
	USER INPUT NAME
	LAST NAME 				<input type="text" name="last" maxlength="64"> 
	FIRST INITIAL 			<input type="text" name="first" maxlength="1"> 
	FOOD TYPE				<select name="food">
							<option value="APPLE">APPLE</option>
							<option value="BANANA">BANANA</option>
							<option value="LETTUCE">LETTUCE</option>
							<option value="POTATO">POTATO</option>
							<option value="TOMATO">TOMATO</option>
							</select>
							<br />
	FOOD ID 				<input type="text" name="food-id" maxlength="64"> 
	FERTILIZER QUANTITY 	<input type="text" name="fert-quantity" maxlength="64"> 
	FERTILIZER TYPE  		<input type="text" name="fert-type" maxlength="64"> 
	<hr />
	PESTICIDE QUANTITY 		<input type="text" name="pest-quantity" maxlength="64"> 
	PESTICIDE TYPE 			<input type="text" name="pest-type" maxlength="64"> 
	PESTICIDE INTERVAL 		<input type="text" name="pest-interval" maxlength="64"> 
	<hr />
	WATER QUANTITY 			<input type="text" name="water-quantity" maxlength="64"> 
	WATER TYPE 				<input type="text" name="water-type" maxlength="64"> 
	WATER INTERVAL 			<input type="text" name="water-interval" maxlength="64"> 
		<hr />
	DELIVERY METHOD 		<input type="text" name="del-method" maxlength="64"> 
	DELIVERY DISTANCE 		<input type="text" name="del-distance" maxlength="64"> 
	DELIVERY WASTE % 		<input type="text" name="del-waste" maxlength="64"> 
	<hr /> 
	GENETICALLY MODIFIED ORGANISM (GMO) <br />
	GMO 					<input type="text" name="gmo" maxlength="64"> <br />
	COMMENTS   				<textarea rows="4" cols="50" name="comments" >Type comments or remove this this text.</textarea>
</pre>
<input type="submit" name="submit" value="Submit" />
</form>
INSERT INTO `fooddata` (`last`, `first`, `food_type`, `food_id`, `fert_quantity`, `fert_type`, `pest_quantity`, `pest_type`, `pest_interval`, `water_quantity`, `water_type`, `water_interval`, `delivery_method`, `delivery_distance`, `delivery_waste`, `gmo`, `comments`, `date_time`) 
VALUES ('coleman', 'c', 'apples', '1999', 'eee', 'fff', 'ggg', 'hhh', 'iii', 'jjj', 'kkk', 'lll', 'mmm', 'nnn', 'ooo', 'ppp', 'comments comments', 'data and time');
</div>
</body>
</html>
