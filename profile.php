<?php
session_start();
	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
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
		<a style="color:white" class="navbar-brand" href="editProfile.php">Edit profile</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search Users" aria-label="Search users">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>

    <div>
	<h3 id="box" style="color:white; text-align:left; width:1500px">
    Name: <?php echo $user_data['first_name'], " ",$user_data['last_name'];?><br>
    Age : <?php echo $user_data['age'];?><br>
	E-mail: <?php echo $user_data['email'];?><br>
	Bio: <?php echo $user_data['bio'];?><br>
	Linkedin username: <?php echo $user_data['linkedin_url'];?><br>
    Twitter username : <?php echo $user_data['twitter_uname'];?><br>
	</div>



    
	

</body>
</html>