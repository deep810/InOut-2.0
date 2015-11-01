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
  <div class='info'>
    <h1>Payment Card</h1>
    <span></span>
  </div>
  <form class='modal' method='POST' action='makedonation_2.php'>
    <header class='header'>
      <h1></h1>
      <div class='card-type'>
        <a class='card active' href='#'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png'>
        </a>
        <a class='card' href='#'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Discover.png'>
        </a>
        <a class='card' href='#'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Visa.png'>
        </a>
        <a class='card' href='#'>
          <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/MC.png'>
        </a>
      </div>
    </header>
    <div class='content'>
      <div class='form'>
        <div class='form-row'>
          <div class='input-group'>
            <label for=''>Name on card</label>
            <input placeholder='' type='text' name="name">
          </div>
        </div>
        <div class='form-row'>
          <div class='input-group'>
            <label for=''>Card Number</label>
            <input name='card_no' maxlength='16' placeholder='' type='number'>
          </div>
        </div>
        <div class='form-row'>
          <div class='input-group'>
            <label for=''>Expiry Date</label>
            <input placeholder='' type='month'>
          </div>
          <div class='input-group'>
            <label for=''>CVS</label>
            <input maxlenght='4' placeholder='' type='number'>
          </div>
        </div>
      </div>
    </div>
    <footer class='footer'>
      <button class='button' >Complete Payment</button>
    </footer>
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
								  <p></p>
								  <p></p>
								  <p></p>
								</div>
								<div class="clear"> </div>
							</li>
							
							<li>
								<img src="images/phone.png" alt=""/>
								<div class="extra-wrap">
									<p></p>
								</div>
								<div class="clear"> </div>
							</li>
							<li>
								<img src="images/mail.png" alt=""/>
								<div class="extra-wrap">
									<p></p>
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
