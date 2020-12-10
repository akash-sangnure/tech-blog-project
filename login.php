<?php
	session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password)){
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0){
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password){
					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die(); 
				}
			}
			echo "Wrong username or password!";
		}else{
			echo "Please enter valid information";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #202a3c">
	
	<div id = "box">
		<form method = "post">
			<div style="font-size: 20px; margin: 10px; color: #c3b9b9">Login</div>
			<input id = "text" type="text" name="user_name" placeholder="User name"><br><br>
			<input id = "text" type="password" name="password" placeholder="Password"><br><br>
			<input id = "button" type="submit" value="Login"><br><br>
			<a href="signup.php" style="text-decoration: none;color:red">click to Sign Up</a>			
		</form>
	</div>

</body>
</html>