<?php 
session_start(); 
$_SESSION['pagename'] = "form_index";
//include 'db/db.php';
 //include 'db/error.php'; 
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
<?php  
if(isset($_POST['submit'])){
	$last_input = 	$_POST['last'];
	$first_input = 	$_POST['first'];
	$food_input = $_POST['food'];
	$food_id_input = $_POST['food_id'];
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
	
	echo "$last_input <br />";
	echo "$first_input<br />";
	echo "$food_input <br />";
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

?>


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



<pre>
foodname 				:	name of the food
	fertalizer-quantity 	: 	quantity of feralizer used
	fertalizer-type 		: 	type of feralizer
	pesticide-quantity		: 	quantity of pecticide used
	pesticide-type 			:	type of pecticide used
	pesticide-interval 		:	pesticide 
	water-amount			:	how often is the crop watered
	irrigation-type 		:	type of water used for irrigation
	water-interval 			: 	how often is is the crop watered
	gmo 					:	genetically modified organism
	delivery-method 		: 	how is the crop delivered to the distributor
	delivery-distance 		: 	how far is it delivered
	delivery-waste-perent	: 	what percentage is wasted during delivery
	comments text NOT NULL	: 	comments
</pre>

</div>
</body>
</html>
