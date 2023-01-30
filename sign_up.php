
<?php

$errors_arr = array();
if(isset($_GET['error_fields'])){
	$errors_arr=explode("," , $_GET['error_fields']);
}

?>
<html>
	<body>
		<form method="post" action="process_db.php">
			<label for="name">Username</label>
			<input type="text" name="name" id="name"/><?php if (in_array("name",$errors_arr)) echo "*Please Enter Your Name"; ?> <br/>
			<label for="email">Email Address</label>
			<input type="email" name="email" id="email"/><?php if (in_array("email",$errors_arr)) echo "*Please Enter valid email address"; ?><br/>
			<label for="password">Password</label>
			<input type="password" name="password" id="password"/><?php if (in_array("password",$errors_arr)) echo "*Please Enter password more that 6 characters"; ?><br/>
			<label for="gender">Gender</label><br/>
			<input type="radio" name="gender" value="male"/>Male
			<input type="radio" name="gender" value="female"/>Female
			<input type="submit" name="submit" value="Register"/><br/>
		</form>
	</body>
</html>

