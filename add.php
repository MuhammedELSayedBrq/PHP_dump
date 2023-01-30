<?php
	$error_fields = array();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(! (isset($_POST['name']) && !empty($_POST['name']))){
		$error_fields[]= "name";
	}
	if (! (isset($_POST['email']) && filter_input(INPUT_POST , 'email' , FILTER_VALIDATE_EMAIL))){
		$error_fields[] = "email";
	}
	if (! (isset($_POST['password']) && strlen($_POST['password'] > 5))){
		$error_fields[]="password";
	}
	if (!$error_fields){
		$conn = new mysqli('localhost' , 'username', 'password' , 'reg');
		$name = mysqli_escape_string($conn , $_POST['name']);
		$email = mysqli_escape_string($conn , $_POST['email']);
		$password = sha1($_POST['password']);
		if($conn->query("insert into users (name,email,password) values ('".name."' , '".email."' , '".password."')")){
			header("Location: list.php");
			exit;
		}
		mysqli_close($conn);
		}
	}
?>
<html>
	<head>
		<title> Admin Panel - Add User</title>
	</head>
	<body>
		<form method="post">
		<label for='name'>Name</label>
		<input type="text" name="name" id="name" value="<?= (isset($_POST['name'])) ? $_POST['name']:'' ?>" /><?php if (in_array("name", $error_fields)) echo "*Please Enter Your Name"; ?> <br/>
		
		<label for='email'>Email</label>
		<input type="email" name="email" id="email" value="<?= (isset($_POST['email'])) ? $_POST['email']:'' ?>"/><?php if(in_array("email", $error_fields)) echo "*Please enter a valid email address";?><br/>
		
		<label for='password'>Password</label>
		<input type="password" name="password" id="password" /><?php if (in_array("password",$error_fields)) echo "Password should not be less than 6 characters"; ?> <br/>
		<input type="submit" name="submit" value="Add User" />
		</form>		
	</body>
</html>
