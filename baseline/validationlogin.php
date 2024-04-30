<?php

if(isset($_REQUEST['error'])){
	
	echo $_REQUEST['error'];  
}

?>

<form action="validationlogin2.php" method="post">
 <h1>Login Page</h1>
 Email<input type="email" name="email" /> <br><br>
Password<input type="password" name="password" /> <br>
<input type="submit" name="submit" /> <br>

</form>