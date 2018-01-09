<?php
function showerror()
	{	
		die("<h1>Input error. . > HOME</a>");
		die("Input error. .".mysql_errno(). " : ".mysql_error());
	}
?>
