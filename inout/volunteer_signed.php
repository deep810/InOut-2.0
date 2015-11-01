<!DOCTYPE HTML>
<html>
<head>
	<title>oneIndia</title>
	<link rel="stylesheet" type="text/css" href="css/imgeffect.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<!----start-header----------->
	<div class="header_bg">
		<div class="wrap">
			<div class="header">
				<!--------start-logo------>
				<div class="logo">
					<a href="index_signed.php"><img src="images/logo2.png" alt="" /></a>
				</div>	
				<!--------end-logo--------->
				<!----start-nav-------->	
				<div class="nav">
					<ul>
					   <li><a href="projects_signed.php">Projects</a></li>
					
									 <li><a href="donation_signed_1.php">Donate</a></li>
									 
								   <li><a href="volunteer_signed.php">Volunteer</a></li>	
   									<?PHP
									session_start();
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "inout";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password,$dbname);
									// Check connection
									if (!$conn) {
										die("Connection failed: " . mysqli_connect_error());
									}
								
										$sql="SELECT * FROM users WHERE username='{$_SESSION["login_user"]}'";
										$result=mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){
									?>
								   <li><a href="logout.php">Greetings <?php echo $row["name"];?></a></li>
										<?php } ?>
					 </ul>
				</div>	
				<div class="clear"></div>
				<!-----end-nav-------->
			</div>
		</div>
	</div>
	<!------end-header------------>
	
<!--	<div class="modal fade" id="login-modal"  tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="loginmodal-container">
			<h1>Sign Up</h1><br>
			<form method="POST" action="Signup.php"> 
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="password" name="confirm_password" placeholder="Confirm Password" required>
				<input type="submit" name="SignUp" class="login loginmodal-submit" value="SignUp">
				<input type="submit" onclick="location='home_page.php';" name="Submit Form" class="login loginmodal-submit" value="Return to HomePage">
			</form>
		  </div>
		</div>
	</div>	 -->
<!--	<div class="col-md-7">
		<form>
			<div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" class="form-control" id="email">
			</div>
		</form>
	</div> -->
	      <div class="row" style="margin-bottom:0px;">
        <div class="col s8 offset-s2">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Volunteering </span>
              <p>The main motive of our endeavor is to provide internet access to the maximum number of disconnected people in India. 
			  It is not mandated that one can help just by providing monetary funds. Some good deeds are just as kind and generous.
			  The areas where the initiatives have already started to provide the internet access contains people who are still unaware of the the services.
			  You can help them by reaching out to them and generating awareness among them about the budding services that are 
			  working hard and fast to provide feasible internet servies to them. </p>
			  <p>If you are interested, fill the consent form below. We will reach out to you.</p>
            </div>
          </div>
        </div>
      </div>
        <script>
            function validateform() {
                var email = document.signUp.email.value;
                var atPosition = email.indexOf("@");
                var dotPosition = email.indexOf(".");
				var contact_no = document.signUp.contact_no.value;
				var val1;
				//console.log(contact_no);
                if (atPosition<1 || dotPosition<atPosition+2 || dotPosition+2>=email.length) {
                    alert("Please enter a valid e-mail address");
                    return false;
                }
				if(isNan(contact_no) || contact_no.length != 10) {
				 //proceed with rest of code
					return false;
				}
            }
        </script>
	<!-- contact form start --->
	<div class="row margin-top:2px;">
		<div class="col s8 offset-s2">
			<div class="card blue-grey darken-1" >
				<div class="card-content white-text">
					<h1><span class="card-title">Contact Form </span></h1>
				  <div class="row">
					<form role="form" action="api/submit_contact.php" name="signUp" method="POST" class="col-md-8" onsubmit="return validateForm();">
					  <div class="row">
						<div class="input-field col s12">
						  <input placeholder="Name" id="name" name="name" type="text" class="validate" required> 
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s12">
						  <input placeholder="E-mail" id="email" name="email" type="email" class="validate" required>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s12">
						  <input placeholder="contact-no" id="contact_no" name="contact_no" type="text" class="validate" required>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s12">
							<textarea placeholder="address" id="address"  name="address"  class="materialize-textarea" required></textarea>
						</div>
					</div>
					 <div class="row">
						<div class="input-field col s12">
							<textarea placeholder="state" id="state"  name="state"  class="materialize-textarea" required></textarea>
						</div>
					</div>
					  <button name="signUp" class="btn waves-effect waves-light" type="submit">Submit</button>
					</form>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact form ends -->
  
<div class="contact" id="contact">
	<div class="wrap">
		<h2>Contact Us</h2>
		<div class="section group">
			
				<div class="col span_1_of_3">
					<div class="company_address">
				     	<h5>Registered Office</h5>
						<ul class="list3">
							<li>
								<img src="images/location.png" alt=""/>
								<div class="extra-wrap">
								  <p>New CRC</p>
								  <p>SVNIT, ICHCHHANATH</p>
								  <p>SURAT-395007</p>
								</div>
								<div class="clear"> </div>
							</li>
							
							<li>
								<img src="images/phone.png" alt=""/>
								<div class="extra-wrap">
									<p>+918758757287</p>
								</div>
								<div class="clear"> </div>
							</li>
							<li>
								<img src="images/mail.png" alt=""/>
								<div class="extra-wrap">
									<p>connectoneindia@gmail.com</p>
								</div>
								<div class="clear"> </div>
							</li>
						</ul>
				   </div>
				 </div>
				 
				 
				 
				 <div class="col span_2_of_3">
				 <h4>Social</h4>
				
				<img src="images/facebook.png" alt=""/>
				
				
				<img src="images/twitter.png" alt=""/>
		
				
				<img src="images/linkedin.png" alt=""/>
				
			
				 </div>
				 
				 
				<div class="clear"></div>
			  </div>
	  </div>
</div>
	
     <div class="footer-bottom">
     	<div class="wrap">
			<div class="copy">
				<p class="copy">© 2015 oneIndia. All rights reserved</p>
			</div>		
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</body>

</html>