<!DOCTYPE HTML>
<html>
  <head>
    <link href="css/login.css" rel="stylesheet">
  </head>


<body>
	<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" >
		<div class="modal-dialog">
		  <div class="loginmodal-container">
			<h1>Sign Up</h1><br>
			<form method="POST" action="insertuser.php"> 
				<input type="text" name="Name" placeholder="Name">
				<input type="email" name="username" placeholder="E-mail" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="password" name="confirm_password" placeholder="Confirm Password" required>
				<input type="text" name="phone" placeholder="Phone Number" required>
				<input type="submit" name="SignUp" class="login loginmodal-submit" value="SignUp">
				<input type="submit" onclick="location='index.php';" name="Submit Form" class="login loginmodal-submit" value="Return to HomePage">
			</form>
		  </div>
		</div>
	</div>
	
</body>
</html>