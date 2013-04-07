<?php
   
    if( ! empty( $_POST['user'] ) && ! empty( $_POST['pass'] ) ) {
    	$username = $_POST['user'];
    	$password = $_POST['pass'];
    	
    	
    	echo "You just registered with $username and $password";
    	
    } else {
    	echo "<strong>You shall not pass!</strong>";
    
    }

?>
