<?php
session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$first_name = $_POST['first_name'];
		$first_name = $_POST['first_name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password)){
			//save to database
			$user_id = random_num(20);
			$query = "insert into users(user_id, user_name, password, first_name, last_name, age, email) 
			values('$user_id','$user_name','$password','$first_name','$last_name','$age', '$email');";
			mysqli_query($con,$query);
			header("Location: login.php");
			die(); 
		}else{
			echo "Please enter valid information";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #202a3c">
	
	
	<div id = "box">
		<form method = "POST">
			<div style="font-size: 20px; margin: 10px; color: #c3b9b9">Sign UP</div>
			<input id = "text" type="text" name="first_name" placeholder="first name"><br><br>
			<input id = "text" type="text" name="last_name" placeholder="last name"><br><br>
			<input id = "text" type="email" name="email" placeholder="email"><br><br>
			<input id = "text" type="text" name="age" placeholder="Age"><br><br>
			<input id = "text" type="text" name="user_name" placeholder="User name"><br><br>
			<input id = "text" type="password" name="password" placeholder="Password"><br><br>
			<input id = "button" type="submit" value="Signup" ><br><br>
			
			<a href="login.php" style="text-decoration: none;color:red">click to Login</a>
		</form>
	</div>

</body>
</html>