<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
body {
	font-family: Verdana, Geneva, sans-serif;
}
pre{
		font-family: Verdana, Geneva, sans-serif;
		background-color: #111;
		color: #000;
		
	
}
.main img {
    width: 100%;
}

h1{
    font-size: 1.625em;
}

h2{
    font-size: 1.375em;
}

.header {
    padding: 1%;
    background-color: #f1f1f1;
    border: 1px solid #e9e9e9;
}

.menuitem {
    margin: 2%;
    margin-left: 0;
    margin-top: 0;
    padding: 2%;
    border-bottom: 1px solid #e9e9e9;
    cursor: pointer;
}
a{
	font-family: Verdana, Geneva, sans-serif;
	color: #f00;
	text-decoration: none;
	
}
a:hover{
	color: #000;
}
.main {
    padding: 2%;
}

.right {
    padding: 4%;
    background-color: #CDF0F6;
}

.footer {
    padding: 1%;
    text-align: center;
    background-color: #f1f1f1;
    border: 1px solid #e9e9e9;
    font-size: 0.625em;
}

.gridcontainer {
    width: 100%;
}

.gridwrapper {
    overflow: hidden;
}

.gridbox {
    margin-bottom: 2%;
    margin-right: 2%;
    float: left;
}

.gridheader {
    width: 100%;
}

.gridmenu {
    width: 22%;
}

.gridmain {
    width: 47%;
}

.gridright {
    width: 22%;
    margin-right: 0;
}

.gridfooter {
    width: 100%;
    margin-bottom: 0;
}

@media only screen and (max-width: 500px) {
    .gridmenu {
        width: 100%;
    }

    .menuitem {
        margin: 1%;
        padding: 1%;
    }

    .gridmain {
        width: 100%;
    }

    .main {
        padding: 1%;
    }

    .gridright {
        width: 100%;
    }

    .right {
        padding: 1%;
    }

    .gridbox {
        margin-right: 0;
        float: left;
    }
}

</style>
</head>
<body>
<div class="gridcontainer">
    <div class="gridwrapper">
        <div class="gridbox gridheader">
            <div class="header">
                <h1>The Pulpit Rock</h1>
            </div>
        </div>
        <div class="gridbox gridmenu">
            <div class="menuitem"><a href = "media.php?id=1001">APPLES</a></div>
            <div class="menuitem">BANANAS</div>
            <div class="menuitem">CABBAGE</div>
            <div class="menuitem">POTATOES</div>
            <div class="menuitem">TOMATOES</div>
        </div>
        <div class="gridbox gridmain">
            <div class="main">
<h1>Food For Thought</h1>
<p>What are you really getting when you buy produce?</p>
<img src="img/ttlogo.png" alt="Tri-Tech" width="" height="200">

            </div>
        </div>
        <div class="gridbox gridright">
            <div class="right">
							
								FOOD CODES
							  <br />
								APPLES : 1001 to 1999<br />
								BANANAS: 2001 to 2999<br />
								CABBAGE: 3001 to 3999<br />
								POTATOES: 4001 to 4999<br />
								TOMATOES: 5001 TO 5999<br />
					
            </div>
        </div>
        <div class="gridbox gridfooter">
            <div class="footer">
<p> Text</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
