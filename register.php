<?php 
$con=mysqli_connect("localhost","root","","social");
if(mysqli_connect_errno()){
	echo "Failed to connect: ".mysqli_connect_errno();
}

//Declaring variable to prevent errors
$fname="";//First name
$lname="";//Last name
$em="";//email
$em2="";//email 2
$password=""; //password
$password2="";//password 2
$date="";// Sign up date
$error_array="";//Holds error messages

if(isset($_POST['register_button'])){
	//Registration form values

	//First name
	$fname=strip_tags($_POST['reg_fname']);//Remove html tags
	$fname=str_replace(' ','',$fname);//remove spaces
	$fname=ucfirst(strtolower($fname));//Uppercase first letter

    //Last name
	$lname=strip_tags($_POST['reg_lname']);//Remove html tags
	$lname=str_replace(' ','',$lname);//remove spaces
	$lname=ucfirst(strtolower($lname));//Uppercase first letter

		//First name
	$em=strip_tags($_POST['reg_email']);//Remove html tags
	$em=str_replace(' ','',$em);//remove spaces
	$em=ucfirst(strtolower($em));//Uppercase first letter
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Swirlfeed</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<input type="text" name="reg_fname" placeholder="First Name" required>
		<br>
		<input type="text" name="reg_lname" placeholder="Last Name" required>
		<br>
		<input type="email" name="reg_email" placeholder="Email" required>
		<br>
		<input type="email" name="reg_email2" placeholder="Confirm Email" required>
		<br>
		<input type="password" name="reg_password" placeholder="Password" required>
		<br>
		<input type="password" name="reg_password2" placeholder="Confirm Password" required>
		<br>
		<input type="submit" name="register_button" value="Register">
	</form>
</body>
</html>