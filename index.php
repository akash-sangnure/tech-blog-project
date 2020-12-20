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
        <title> Index </title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="style.css">
    </head>	
</head>

<body class = "index-body">

	<div class = "main-header">
		<nav class="navbar navbar-light justify-content-between" >
			<br>
			<a style="color:black; " class="navbar-brand" href="signup.php">Edulogy</a>
			<a href="index.php"><img class = "logo" src="images\edulogy-removebg-preview (1).png" alt = "logo"/></a>
			<a style="color:black" class="navbar-brand" href="signup.php">Sign Up</a>
			<a style="color:black" class="navbar-brand" href="login.php">Login</a>
			<a style="color:black" class="navbar-brand" href="logout.php">Logout</a>
			<a style="color:black" class="navbar-brand" href="profile.php">View profile</a>
		</nav>
		<br><br>
		<strong>
			<h1 style="text-align:center; color:black; font-family:'Times new roman'">Hello, <?php echo $user_data['first_name'], " ",$user_data['last_name'];?> 
			<br>Welcome to our Blog<br>Online learning website
		</strong></h1>
	</div>
	<br>
	
	<div class = "main-header-2" >
		<img class = "main-header-2-img" src="images\device_01.png" alt="">
		<h1 style = "color:brown; font-family:monospace;left:400px"><strong>OUR AWESOME FEATURES</strong></h1><br>
		
		<h4><ul style = "position:relative; text-align: left; left:400px">
			<li>Short Explanation</li>
			<li>Clear Concepts</li>
			<li>solved questions</li>
			<li>questions for practice</li>
		</ul><h4>
	</div>
	<h1 style = "color:brown; font-family:monospace; text-align:center" ><strong>Browse tutorials</strong></h1><br>
	

	<div class="wrap">
            <div class="title">
				<a href="html files\html blog\htmlblog.php"><img src="images\html-block-image.jpg" alt = "HTML block image"/></a>
                <div class="text">
                    <h1>HTML</h1>
                    <p class="para">Learn HTML</p>
                </div>                                
            </div>
            <div class="title">
				<a href="html files\css blog\cssblog.php"><img src="images\CSS-block-image.jpg"/></a>
                <div class="text">
                    <h1>CSS</h1>
                    <p class="para">Learn CSS</p>
                </div>
            </div>
			<div class="title">
				<a href="html files\python blog\pythonblog.php"><img src="images\Python-block-image.jpg"/></a>
                <div class="text">
                    <h1>PYTHON</h1>
                    <p class="para">Learn Python</p>
                </div>
            </div>
			
			<br><br><br><br>
			
			<div class="title">
                <a href="html files\cpp blog\cppblog.php"><img src="images\C++-block-image.jpg"/></a>
                <div class="text">
                    <h1>C++</h1>
                    <p class="para">Learn C++</p>
                </div>
			</div>
			<div class="title">
				<a href="html files\java blog\javablog.php"><img src="images\java-block-image.jpg"/></a>
                <div class="text">
                    <h1>JAVA</h1>
                    <p class="para">Learn JAVA</p>
                </div>                                
            </div>
            <div class="title">
				<a href="html files\c blog\cblog.php"><img src="images\C-block-image.jpg"/></a>
                <div class="text">
                    <h1>C</h1>
                    <p class="para">Learn C</p>
                </div>
			</div>
		</div>
		
	
	<div class="container">
    <section style="height:80px;"></section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
							<li><a href="html files/html blog/htmlblog.php">html 5</a></li>
							<li><a href="html files/css blog/cssblog.php">css 3</a></li>
							<li><a href="html files/cpp blog/cppblog.php">c++</a></li>
							<li><a href="html files/java blog/javablog.php">java</a></li>
							<li><a href="html files/c blog/cblog.php">c</a></li>
							<li><a href="html files/python blog/pythonblog.php">python</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Team</h3>
                        <ul>
                            <li><a href="#">Aditya VSM</a></li>
                            <li><a href="#">Akash Ashok Sangnure </a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Edulogy</h3>
                        <p>Edulogy is an online learning platform where you can learn computer science topics. We cover top programming laguages with short and clear explanations which even a beginner can understand.</p>
                    </div>
                    <div class="col item social">
						<a href="#"><i class="icon ion-social-facebook"></i></a>
						<a href="#"><i class="icon ion-social-twitter"></i></a>
						<a href="#"><i class="icon ion-social-snapchat"></i></a>
						<a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Edulogy © 2020</p>
            </div>
        </footer>
    </div>

    
</body>
</html>