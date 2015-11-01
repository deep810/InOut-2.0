<!DOCTYPE HTML>
<html>
<head>
<title>oneIndia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />    
	<link rel="stylesheet" href="css/reset.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style_pay.css">
            
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
								 <div class="clear"> </div>
								 </ul>
							</div>			
							<!-----end-nav-------->
							<div class="clear"> </div>
						</div>
					</div>
				</div>
    <div class='container'>
	
				
		<!------end-header------------>
  <p>
  We bring to you the opportunity of doing your bit by contributing to the projects we have collaborated with.
  </p>
  <p>
  We have established a crowd sourcing platform for these projects to encourage them to invest more and more
  towards the betterment of the underdeveloped areas. These donations are completely subjected to the users of 
  our website and are under no circumstances under any duress to make a donation.
  </p>
  <p>
  About 90% of the donations we accept strictly go into the funding of the programs and the rest 10% are utilised
  for the well functioning of this platform. The donations are accepted only via VISA card, MAESTRO, American Express and
  DISCOVER. In order to make donations you have to be signed in.
  </p>
  <p>
  To review our terms and policies with the hosts of the stated projects click the following link.
  
  </p>
  <h2>Make A Donation:</h2>
  <h1>How much would you like to donate:</h1>
  <form action="makedonation_1.php" method="POST">
  <select name="amount">
  <option>Select An Amount:</option>
  <option>1000</option>
  <option>2000</option>
  <option>3000</option>
  </select>
  <button>SUBMIT</button>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index_pay.js"></script>
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
				
				<img src="images/googleplus.png" alt=""/>
				
			
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
  </body>
</html>
