<?php
	include_once "header.php";
	echo "<div>";
	 if( ! empty( $_POST['user'] ) && ! empty( $_POST['pass'] ) ) {
    	$username = $_POST['user'];
    	$password = $_POST['pass'];
    	
    	
    	echo "You just registered with $username and $password";
    	
    } else {
    	echo "<strong>You shall not pass!</strong>";
    
    }
    
?> </div>	
<form method="POST" action="">
	<label>Username: </label> <input type="text" name="user" />
	<label>Password: </label> <input type="password" name="pass" />
	<input type="submit" />
</form>
<?php
	include_once "footer.php";
?>
