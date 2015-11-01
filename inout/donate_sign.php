<!DOCTYPE HTML>
<html>
  <head>
    <link href="css/login.css" rel="stylesheet">
	<title>oneIndia</title>
  </head>


<body>
	<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
		  <div class="loginmodal-container">
			<h1>Sign In</h1><br>
			<form method="POST" action="donatesignvalidate.php"> 
				<input type="text" name="username" placeholder="email" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" name="SignUp" class="login loginmodal-submit" value="LOGIN IN">
				<input type="submit" onclick="location='index.php';" name="Submit Form" class="login loginmodal-submit" value="Return to HomePage">
			</form>
			<hr>
			<div class="bottom-footer">
				Don't have an account?<a href="signup.php">Sign up here</a>
			</div>
		  </div>
		</div>
	</div>
	
</body>
</html>