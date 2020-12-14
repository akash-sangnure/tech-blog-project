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

<body style="background-color:white">
	<style>
		body{
			background-color:white;
		}
	</style>
	<nav class="navbar navbar-light bg-dark justify-content-between" >
		<a style="color:white" class="navbar-brand" href="index.php">Home</a>
		<a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
		<a style="color:white" class="navbar-brand" href="login.php">Login</a>
		<a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
		<a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
	</nav>
	<div class = "main-header">
	<br><br><strong>
	<h1 style="text-align:center; color:black; font-family:'Times new roman'">Hello, <?php echo $user_data['first_name'], " ",$user_data['last_name'];?> 
	<br>Welcome to our Blog<br>Online learning website
	</strong></h1>
	</div>
	<br>
	<div class = "main-header-2" >
		<img style = "float: left;height:450px;" src="images/brooke-lark-W1B2LpQOBxA-unsplash.jpg" alt="">
		<h1 style = "color:brown; font-family:monospace" ><strong>OUR AWESOME FEATURES</strong></h1><br>
		
		<h4><ul style = "position:relative; text-align: left; left:100px">
			<li>Short Explanation</li>
			<li>Clear explanation</li>
			<li>solved questions</li>
			<li>questions for practice</li>
		</ul><h4>
	</div>
	<h1 style = "color:brown; font-family:monospace; text-align:center" ><strong>Browse tutorials</strong></h1><br>
		
	<div>
		
	</div>

	<div class="grid-container">
		<div class = "grid-child-sidebar">
			<a style = "text-size-adjust:20px;" href="html files/html blog/htmlblog.php">HTML</a><br><br>
			<a href="html files/css blog/cssblog.php">CSS</a><br><br>
			<a href="html files/cpp blog/cppblog.php">C++</a><br><br>
			<a href="html files/java blog/javablog.php">JAVA</a><br><br>
			<a href="html files/c blog/cblog.php">C</a><br><br>
			<a href="html files/python blog/pythonblog.php">PYTHON</a><br><br>
		</div>
		<div class = "vertical"></div> 
        <div style = "color: black; padding:30px; padding-left : 400px">
			<h2>Hello</h2>
        </div>
    </div>
    
</body>
</html>