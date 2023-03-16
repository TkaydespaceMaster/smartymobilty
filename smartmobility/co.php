<?php      
   $host="sql112.epizy.com";
   $user="epiz_33805992";
   $pass="wDnGWjKpz7tc0x";
   $database_name="epiz_33805992_student"; 
      
    $con = mysqli_connect($host, $user, $pass, $database_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    else{
        echo "successfully connected to the database";
    }
?> 