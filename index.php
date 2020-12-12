<?php
session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>


<!DOCTYPE html>
<html>
<head>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
			<?php include 'style.css'; ?>
		</style>
    </head>	
</head>
<body style="background-color: #12232E">

	<nav class="navbar navbar-light bg-dark justify-content-between" >
		<a style="color:white" class="navbar-brand" href="index.php">Home</a>
		<a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
		<a style="color:white" class="navbar-brand" href="login.php">Login</a>
		<a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
		<a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search info" aria-label="Search users">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>

	<h1 style="text-align: center; color:white; font-family:'Times new roman'">Hello, <?php echo $user_data['first_name'], " ",$user_data['last_name'];?> 
	<br>Welcome to our Blog</h1>
	<hr>

	<div class="grid-container">
		<div class = "grid-child-sidebar">
			<a href="html files/html blog/htmlblog.php">HTML</a><br><br>
			<a href="html files/css blog/cssblog.php">CSS</a><br><br>
			<a href="html files/htmlblog.html">C++</a><br><br>
			<a href="html files/htmlblog.html">JAVA</a><br><br>
			<a href="html files/htmlblog.html">C</a><br><br>
			<a href="html files/htmlblog.html">PYTHON</a><br><br>
		</div>
        <div style = "color: white; padding:30px; padding-left : 400px">
			<h2>Hello</h2>
        </div>
    </div>
    <hr>
	

</body>
</html>