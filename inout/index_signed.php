<!DOCTYPE HTML>
<html>
<head>
<title>oneIndia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/imgeffect.css" />
<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
<style>
table {
	align:center;
    width: 1080px;
 
    table-layout: fixed;
}

td {
    overflow: hidden;
	text-align:center;
    max-width: 30%;
    width: 30%;
    
    word-wrap: break-word;
}
</style>
<script src="js/jquery.min.js"></script>
<!-- start gallery Script -->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
				<script type="text/javascript">
				$(function () {
					
					var filterList = {
					
						init: function () {
						
							// MixItUp plugin
							// http://mixitup.io
							$('#portfoliolist').mixitup({
								targetSelector: '.portfolio',
								filterSelector: '.filter',
								effects: ['fade'],
								easing: 'snap',
								// call the hover effect
								onMixEnd: filterList.hoverEffect()
							});				
						
						},
						
						hoverEffect: function () {
						
							// Simple parallax effect
							$('#portfoliolist .portfolio').hover(
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
									$(this).find('img').stop().animate({top: 0}, 500, 'easeOutQuad');				
								},
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeInQuad');
									$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
								}		
							);				
						
						}
			
					};
					
					// Run the show!
					filterList.init();
					
					
				});	
				</script>
				<!-- Add fancyBox main JS and CSS files -->
		<!--		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
						<script>
							$(document).ready(function() {
								$('.popup-with-zoom-anim').magnificPopup({
									type: 'inline',
									fixedContentPos: false,
									fixedBgPos: true,
									overflowY: 'auto',
									closeBtnInside: true,
									preloader: false,
									midClick: true,
									removalDelay: 300,
									mainClass: 'my-mfp-zoom-in'
							});
						});
						</script>
						-->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<!----end gallery----------->
				
		   	<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
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
<div id="cssSlider">
  <div id="sliderImages">
		<img id="si_1" src="images/c.jpg" alt="" />
		<img id="si_2" src="images/d.jpg" alt="" />
	

		<div style="clear:left;"></div>
	</div>
</div>

<!-----end-slider-------->
<!--start portfolio------>
	<div class="wrap" id="portfolio">
				<div class="main">
					<!-- start gallery  -->
							<div class="gallery1">
					<!--start-mfp -->	
				<!--		<div id="small-dialog1" class="mfp-hide">
							<div class="pop_up">
								<h2>Lorem ipsum sit amet</h2>
								<img src="images/icon1.png" alt=""/>
								<p class="para">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
							</div>
						</div>
						-->
					<!--end-mfp -->	
			<!---start-content----->
			<div class="gallery">
					<div class="clear"> </div>
					<div class="container">
						<h2>ABOUT US</h2>
						<p>Today most of the work being done in the world is based on global connectivity which is provided through the means of
						INTERNET.
						In order to prosper India has tied knots and connected with several other nations in a variety of fields because we 
						NEED ACCESS to information and updates.</p>
						<p>However, during this course of action we all forgot about the very bug that was digesting us from the 
						inside. THE LACK OF INTERNET IN RURAL INDIA. This is a very serious issue and hence we have taken the initiative to 
						bring it to the notice of our dear citizens and do something about it.
						We have collaborated with 3 budding projects to make them successful in our country; they are as follows:</p>
												
			<div id="portfoliolist">
			<table>			
			<tr>
			<td>
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">				
				<!--	<a class="popup-with-zoom-anim" href="#">	-->
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">
									<div class="ch-info">
									
										<h3>Project Loon</h3>			
									</div>
								</div>
							</li>
						</ul>
			<!--		</a>	-->
				</div>
			</div>		
			</td>
			<td>			
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
				<!--	<a class="popup-with-zoom-anim" href="#">	-->
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-2">
									<div class="ch-info">
										<h3>AirJaldi</h3>
									</div>
								</div>
							</li>
						</ul>
			<!--		</a>	-->
				</div>
			</div>
			</td>
			<td>
			<div class="hide">	
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
			<!--		<a class="popup-with-zoom-anim" href="#">	-->
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info">
										<h3>VSAT</h3>
									</div>
								</div>
							</li>
						</ul>
		<!--			</a>	-->
				</div>
			</div>	
			</div>
			</td>
</table>
		</div>
		<br><br>
		<p>
		We also provide opportunities to volunteer for helping those who have little knowledge of the outside world and the basics of internet.
		You can teach them how to connect to the internet and also about how to get access to the internet in the internet starved rural regions of 
		our country.
		You can do your bit by sharing your knowledge and guiding the lost ones. 		
		</p>
		<p>
		If these projects are working so hard for the betterment of our country, then so can we. Thus as a part of our initiative
		we are taking donations to provide funds to these projects so that they continue to work effectively and without any obstacles.
		We had approached these organisations and have accepted on the terms that 10% of all the funds will be spent in the maintainance and 
		well functioning of this site. Here are the certificates of protocols and authentication- certificates.
		</p>
		
	</div>
	<!-- container -->
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script type="text/javascript">$('body').flipLightBox()</script>
	<div class="clear"> </div>
	</div>
	</div>
	</div>
</div>


<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0; padding: 0 }
  #map_canvas { height: 100% }
</style>


<div class="contact" id="contact" style="background-color:#ffffff;">
      	<center>
      	<div id="map" style="width: 900px; height: 400px;"></div>

  <script type="text/javascript">
    var locations = [
      ['Morbi', 23.161017, 71.088625, 4],
      ['Amreli',21.708932, 71.165529, 5],
      ['Sailana', 23.459282, 74.929486, 3],
      ['Jodhpur', 26.191698, 73.691283, 2],
      ['Amalner', 21.036391, 75.056831, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(21.70, 71.16),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  </center>
	
 </div>
 <br>
 <br>
					    
					





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
		<script type="text/javascript">
							$(document).ready(function() {
								
								var defaults = {
						  			containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
						 		};
								
								
								$().UItoTop({ easingType: 'easeOutQuart' });
								
							});
						</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
		 <script src="js/jquery.scrollTo.js"></script>
		</div>
	</div>
</body>
</html>