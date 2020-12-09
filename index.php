<?php
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #202a3c">

	<nav class="navbar navbar-light bg-dark justify-content-between" >
		<a style="color:white" class="navbar-brand" href="index.php">Home</a>
		<a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
		<a style="color:white" class="navbar-brand" href="login.php">Login</a>
		<a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
		<a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search Users" aria-label="Search users">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>

	</nav>

	<h1 style="text-align: center; color:white">Hello, <?php echo $user_data['first_name'], " ",$user_data['last_name'];?> 
	<br>Welcome to our Blog</h1>

</body>
</html>