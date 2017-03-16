<?php 
session_start(); 
$_SESSION['pagename'] = "form_index";
include 'db/db.php';
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
	<a href = "select.php" target = "_blank"> select * from stream.fooddata order by id desc;</a>
<?php  
if(isset($_POST['submit'])){
	$name_input = 	$_POST['name'];
	$food_input = $_POST['food'
	$three_inout = $_POST['three'];
	$four_inout = $_POST['four'];
	$five_input = $_POST['five'];
	$comments_input = $_POST['comments'];
	}
	
	echo "$name_input <br />";
	echo "$food_input <br />";
	echo "$three_input <br />";
	echo "$four_input <br />";
	echo "$five_input <br />";
	echo "$comments_input <br />";
?>


<form action="#" method="post">

	First Name<input type="text" name="name" maxlength="64"> <br />
	Food Type  
		<select name="food">
		<option value="APPLES">APPLES</option>
		<option value="BANANNAS">BANANNAS</option>
		<option value="LETTUCE">LETTUCE</option>
		<option value="POTATOES">POTATOES</option>
		<option value="CORN">CORN</option>
		</select>
		<br />
	Input Three <input type="text" name="three" maxlength="64"> <br />
	Input Four  <input type="text" name="four" maxlength="64"> <br />
	Input Five  <input type="text" name="five" maxlength="64"> <br />
	Comments    <textarea rows="4" cols="50" name="comment" >Type comments or remove this this text.</textarea>

<input type="submit" name="submit" value="Submit" />

</form>




<?php
echo "DEBUG THE name_input = $name_input";
if ( $name_input != "Name" ){
//sql input	*******************************	
echo "DEBUG made it past if $host $user  <br />"; 		

if (!($connection = @ mysql_pconnect($host,$user, $pass))) die("Could not connect to database");
 mysql_select_db("stream", $connection);


echo "DEBUG made it past connection <br />"; 
	$result = mysql_query ("SELECT CURDATE();", $connection);
	$row = mysql_fetch_row($result);$date = $row[0];
   
	$result = mysql_query ("SELECT CURTIME();", $connection);
	$row = mysql_fetch_row($result);$time = $row[0];

	$str0 = '';
	$str1 = $_SERVER['REMOTE_ADDR'];
	$str2 = $time;
	$str3 = $date;
	$str4 = $name_input;  
	$str5 =  $number_input;
//echo " $str1 : $date : $time <br>"; 
$query = "INSERT INTO stream.fooddata (`id`, `ip`, `timein`, `datein`, `name`, `number`) VALUES ('' ,'$str1','$str2','$str3','$str4','$str5');";
echo " <hr />DEBUG $query  <hr />";
 $result = @ mysql_query ($query, $connection)  or showerror();			
	mysql_close();
} // end if  $name_input != "Name"
		
// *******************************************		

?>


</div>
</body>
</html>
