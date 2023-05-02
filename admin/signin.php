<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	
	<!---css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!---boxicons link---->
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	
	<!---google fonts link---->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?
	family=MuseoModerno:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

	<!---header design---->
	<header>
		<a href="#" class="logo">Lost and Found</a>
		
		<ul class="navbar">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Rules</a></li>
			<li><a href="levels/leaderboard.php">LeaderBoard</a></li>
			<li><a href="admin/index.php">Admin</a></li>
			<button type="button" class="btnLogin-popup">Login</button>
		</ul>
	</header>
	
	<!---container---->
	<div class="container">
		<div class="main-box login">
			<h1>Login</h1>
			<form action="signin_action.php" method="POST">
				<div class="input-box">
					<span class="icon"><i class='bx bxs-envelope'></i></span>
					<input type="email" name="email" required="">
					<label>Email</label>
				</div>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-lock-alt'></i></span>
					<input type="password" name="password" required="">
					<label>Password</label>
				</div>
				
				<div class="check">
					<label><input type="checkbox">Remember me</label>
					<a href="#">Forget Password</a>
				</div>
				
				<button type="submit" class="main-btn"> Login</button>
				
				<div class="register">
					<p>If you don't have an account?<a href="index.html" class="register-link">
					Register Here!</a></p>
				</div>
				
				</form>
		</div>
		
		<div class="main-box register">
			<h1>Registration</h1>
			<form action="signup_action.php" method="POST">
			<div class="input-box">
					<span class="icon"><i class='bx bxs-user'></i></span>
					<input type="text" name="name" required="">
					<label>Username</label>
				</div>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-envelope'></i></span>
					<input type="email" name="email" id="email" required="">
					<label>Email</label>
				</div>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-lock-alt'></i></span>
					<input type="password" name="password" id="passowrd" required="">
					<label>Password</label>
				</div>
				
				<div class="check">
					<label><input type="checkbox">I accept all terms & conditions</label>
					
				</div>
				
				<button type="submit" class="main-btn" id="submit" name="submit"> Register Now</button>
				
				<div class="register">
					<p>I Already have an account?<a href="index.html" class="login-link">
					Login!</a></p>
				</div>
				
				</form>
		</div>
		
		<span class="close-icon">
			<div class="bx bx-x"></div>
		
		</span>
	</div>
	
	<!---custom js link---->
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>
