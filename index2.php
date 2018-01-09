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
    background-color: #000;
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
		  font-size: 18px;
		    font-weight: 900;
		    text-decoration: none;
}


.aside {
    background-color: #111;
    padding: 3px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: #0000ff;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 5px;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
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
}
</style>
</head>
<body>

<div class="header">
  <h1>Tri-Tech Skills Center</h1>
  <a href = "admin/" > admin</a>&nbsp;&nbsp;  <a href = "data/" > data</a>
</div>

<div class="row">

<div class="col-3 col-m-3 menu">
  <ul>
	<li><a href= "index.php?id=apples" class= "menu" >APPLES</a> </li>
	<li><a href= "index.php?id=bananas" class= "menu">BANANAS</a> </li>
	<li><a href= "index.php?id=lettuce" class= "menu" >LETTUCE</a> </li>
	<li><a href= "index.php?id=potatoes" class= "menu">POTATOES</a> </li>
	<li><a href= "index.php?id=tomatoes" class= "menu" >TOMATOES</a> </li>
  </ul>
</div>

<div class="col-6 col-m-9">
  <h2>Food Selected</h2>
  <p>
	  <?php
	  echo $_GET['id']; 
	  ?>
	  </p>
 
 </div>

<div class="col-3 col-m-12">
  <div class="aside">
   <h3>
FOOD CODES
  <br />
   	APPLES : 1001 to 1999<br />
	BANANAS: 2001 to 2999<br />
	LETTUCE: 3001 to 3999<br />
	POTATOES: 4001 to 4999<br />
	TOMATOES: 5001 TO 5999<br />
   </h3>
  </div>
</div>

</div>

<div class="footer">
  <p> FOOTER </p>
</div>

</body>
</html>

