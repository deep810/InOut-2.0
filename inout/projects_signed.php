<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<title>oneIndia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Projects</title>
		<meta name="description" content="Blueprint: Responsive Content Slider" />
		<meta name="keywords" content="responsive, content, slider, jquery, css3, fluid, template" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>



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
				
		<!------end-header------------>
		<!-- start slider -->











<div class="container">
			
			<div class="main">
				<div id="cbp-contentslider" class="cbp-contentslider">


							<div class="projects">
					<nav>
						<a href="#slide1" ><span>Project LOON</span></a>
						<a href="#slide2" ><span>AirJaldi</span></a>
						<a href="#slide3" ><span>VSAT</span></a>
						
					</nav>
					</div>

					<ul>
						<li id="slide1">
						<img src="images/1.jpg">
							<div>
								
								<div class="cbp-content">
									<font color="white"><p>Project Loon</p>
									<p> Project Loon is a network of balloons traveling on the edge of space, designed to connect people in rural</p><p> and remote areas, help fill coverage gaps, and bring people back online after disasters.</p>
									</font>
								</div>
                               

							</div>
						</li>
						<li id="slide2">
							  <img src="images/2.jpg">
							<div>
								<div class="cbp-content">
								<font color="white">
									<p>AirJaldi brings fast and reliable internet connectivity to rural areas in India.</p>
									<p>We provide high-quality broadband connectivity to rural areas at reasonable rates. We connect large and small clients from the corporate, civil society and private sectors. We hope you read on, learn more about us and the work we do and possibly be encouraged to become part of the AirJaldi world – as a user, partner, supporter or an interested follower. Enjoy!</p>
									</font>
								</div>
							</div>
						</li>
						<li id="slide3">

						<img src="images/3.jpg">
							
							<div>
								<div class="cbp-content">
								<font color="white">
									<p>VSAT: Global High Speed Internet Services</p>
									<p>VSAT systems provide high speed, broadband satellite communications for Internet or private network communications on a global basis. </p>
									<p>VSAT is an excellent way to connect your remote sites and workers with Internet communications for email, web access, video transmissions, Voice over IP telephone services, or other IP applications for your field operations. VSAT enables you to expedite your business processes by integrating field operations with your corporate wide area network.</p>
									</font>
								</div>
							</div>
						</li>
						
					</ul>
					
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpContentSlider.min.js"></script>
		<script>
			$(function() {
				/*
				- how to call the plugin:
				$( selector ).cbpContentSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease-in-out',
					// current item's index
					current : 0
				}
				- destroy:
				$( selector ).cbpContentSlider( 'destroy' );
				*/

				$( '#cbp-contentslider' ).cbpContentSlider();
			});
		</script>




















































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