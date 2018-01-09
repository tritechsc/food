<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
    font-family: Arial, Helvetica, sans-serif;
}
.header {
    background-color: #008f00;
    color: #ffffff;
    padding: 1px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 3px;
    margin-bottom: 3px;
    background-color: #0000ff;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #f00;
}
a{		   font-family: Arial, Helvetica, sans-serif;
		color: #fff;
		  font-size: 14px;
		    font-weight: 900;
		    text-decoration: none;
}


.aside {
    background-color: #008f00;
    padding: 3px;
    color: #ffffff;
    text-align: center;
      font-weight: 900;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: #008f00;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 5px;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
//cwc
#content{
position:absolute;
left:10px;
top:10px;
}

div.label {
	background-color:#fff;	
	color: #777;
	border-style: solid;
    border-color: #ddd #ddd;
    padding: 3px;
	
}
div.dataoutline{
	background-color:#ddd;	
	color: #000;
	border-style: solid;
    border-color: #ddd #ddd;
    padding: 3px;
	
}


@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
    
    sup {
vertical-align: super;
font-size: smaller;
}

sub{
vertical-align: sub;
font-size: smaller;
}
}
</style>
</head>
<body>

<div class="header">
<h3>&nbsp;&nbsp;&nbsp;The Green Grocer : Tri-Tech Skills Center WSU Imagine Tomorrow Project 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "codes/"> CODES </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "admin/"> ADMIN </a> 

</h3>
</div>

<div class="row">


<div class="col-6 col-m-9">
	  <?php
	  echo $_GET['id']; 
	  $idselected = $_GET['id']; 

		include 'db/db.php';
		include 'db/error.php'; 
		
		$connection = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($dbname, $connection);
		$sql = "select * from food.fooddata where food_id = $idselected";
		//SELECT * FROM `fooddata` WHERE food_id = 2001 
		$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
		//echo "$therows items selected. <br />";//debug
		echo "<div id = content>";	
		while ($row = mysql_fetch_row($result)){
			$photo = "photos/nophoto.png";
			if (($row[3]) == 3001)$photo = "photos/apples.jpg";
			if (($row[3]) == 8000)$photo = "photos/apples.jpg";
			if (($row[3]) == 9000)$photo = "photos/apples.jpg";
			
			if (($row[3]) == 4011)$photo = "photos/bananas.jpg";
			if (($row[3]) == 8011)$photo = "photos/bananas.jpg";
			if (($row[3]) == 9011)$photo = "photos/bananas.jpg";
			
			if (($row[3]) == 4061)$photo = "photos/lettuce.jpg";
			if (($row[3]) == 8061)$photo = "photos/lettuce.jpg";
			if (($row[3]) == 9061)$photo = "photos/lettuce.jpg";
			
			if (($row[3]) == 4072)$photo = "photos/potatoes.jpg";
			if (($row[3]) == 8072)$photo = "photos/potatoes.jpg";
			if (($row[3]) == 9072)$photo = "photos/potatoes.jpg";
			
			if (($row[3]) == 4064)$photo = "photos/tomatoes.jpg";
			if (($row[3]) == 8064)$photo = "photos/tomatoes.jpg";
			if (($row[3]) == 9064)$photo = "photos/tomatoes.jpg";
									
			echo "<div class = dataoutline>";
				echo "<div class =label >FOOD TYPE: ";		
					echo "<span style=color:#000;font-weight:bold>$row[2] </span><img src = $photo></div>";
				echo "<div class =label >FOOD ID	: ";
					echo "<span style=color:#000;font-weight:bold>$row[3] </span></div>";		
				echo "<div class =label >FERTILIZER QUANTITY : ";
					echo "<span style=color:#000;font-weight:bold>$row[4] </span></div>";	
				echo "<div class =label >FERTILIZER TYPE : ";	
					echo "<span style=color:#000;font-weight:bold>$row[5] </span></div>";
				echo "<div class =label >PESTICIDE QUANTITY : ";	
					echo "<span style=color:#000;font-weight:bold>$row[6] </span></div>";
				echo "<div class =label >PESTICIDE TYPE : ";	
					echo "<span style=color:#000;font-weight:bold>$row[7] </span></div>";		
				echo "<div class =label >PESTICIDE INTERVAL : ";
					echo "<span style=color:#000;font-weight:bold>$row[8] </span></div>";		
				echo "<div class =label >WATER QUANTITY  : ";	
					echo "<span style=color:#000;font-weight:bold>$row[9] </span></div>";	
				echo "<div class =label >WATER TYPE : ";
					echo "<span style=color:#000;font-weight:bold>$row[10] </span></div>";					
				echo "<div class =label >WATER INTERVAL : ";
					echo "<span style=color:#000;font-weight:bold>$row[11] </span></div>";	
				echo "<div class =label >DELIVERY METHOD  : ";
					echo "<span style=color:#000;font-weight:bold>$row[12] </span></div>";		
				echo "<div class =label >DELIVERY DISTANCE  : ";
					echo "<span style=color:#000;font-weight:bold>$row[13] </span></div>";	
				echo "<div class =label >DELIVERY WASTE % : ";
					echo "<span style=color:#000;font-weight:bold>$row[14] </span></div>";	
				echo "<div class =label >GMO  :  ";
					echo "<span style=color:#000;font-weight:bold>$row[15] </span></div>";
				echo "<div class =label >CARBON DIOXIDE (CO<sub>2</sub>) : ";
					echo "<span style=color:#000;font-weight:bold>$row[16] </span></div>";
				echo "$row[0] $row[1]";
			
				echo "</div><br />";
		}
	echo "</div>";
		mysql_close($connection);
	
?>
	
	  </p>
 
 </div>

<div class="col-3 col-m-12">
  <div class="aside">
FOOD CODES<br />
 <ul>
	 
	 <li><a href= "index.php?id=3001" class= "menu">APPLES:3001</a> </li>
	<li><a href= "index.php?id=8000" class= "menu">APPLES:8000</a> </li>
	<li><a href= "index.php?id=9000" class= "menu">APPLES:9000</a> </li>
	<hr />
	<li><a href= "index.php?id=4011" class= "menu">BANANAS:4011</a> </li>
	<li><a href= "index.php?id=8011" class= "menu">BANANAS:8011</a> </li>
	<li><a href= "index.php?id=9011" class= "menu">BANANAS:9011</a> </li>
	<hr />
	<li><a href= "index.php?id=4061" class= "menu">LETTUCE:4061</a> </li>
	<li><a href= "index.php?id=8061" class= "menu">LETTUCE:8061</a> </li>
	<li><a href= "index.php?id=9061" class= "menu">LETTUCE:9061</a> </li>
	<hr />
	<li><a href= "index.php?id=4072" class= "menu">POTATOES:4072</a> </li>
	<li><a href= "index.php?id=8072" class= "menu">POTATOES:8072</a> </li>
	<li><a href= "index.php?id=9072" class= "menu">POTATOES:9072</a> </li>
	<hr />
	<li><a href= "index.php?id=4064" class= "menu">TOMATOES:4064</a> </li>
	<li><a href= "index.php?id=8064" class= "menu">TOMATOES:8064</a> </li>
	<li><a href= "index.php?id=9064" class= "menu">TOMATOES:9064</a> </li>
	<hr />
	<li><a href= "selectall.php" class= "menu">SHOW ALL DATA</a> </li>
	 
	
  </ul>
  <br />
  </div>
</div>

</div>

<div class="footer">
  <p> Tri-Tech Constrcution Trades Program</p>
</div>

</body>
</html>
