<?php
   $host = "localhost";
   $dbname = "food";
   $dbuser = "adminfood";
   $dbpass = "Gotg#422A";
   
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }

// grant all privileges on food.* TO 'fuser'@'localhost' IDENTIFIED BY 'redhat'; 

?>
