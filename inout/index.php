<!DOCTYPE HTML>
<html>
<head>
<title>oneIndia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/imgeffect.css" />
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
								<a href="index.html"><img src="images/logo.png" alt="" /></a>
							</div>	
							<!--------end-logo--------->
							<!----start-nav-------->	
							<div class="nav">
								<ul>
								   <li><a href="about.html">Projects</a></li>
								   <li><a href="#">Donate</a></li>
								   <li><a href="#">Volunteer</a></li>
								   <li><a href="#">Sign In</a></li>
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
<div class="slider_bg">
		<div class="wrap">
				<!---start-da-slider----->
						<div class="da-slide"><br><br><br><br><br><br><br><br><br><br><br><br>
							<!--	<h2><span>Success is not a destination,<br>it's a</span> JOURNEY.</h2>
									<br><br><br>
									<a href="#" class="da-link">Learnmore</a>  -->
									<a href="#portfolio" class="scroll"><span class="da-img"> </span> </a>
								</div>
				<!---//End-da-slider----->
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
						<p>uasudiasdasdfyasfdafdufadyfasftuff</p>
						
			<div id="portfoliolist">
			
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
			

		</div>
	</div>
	<!-- container -->
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script type="text/javascript">$('body').flipLightBox()</script>
	<div class="clear"> </div>
	</div>
	</div>
	</div>
</div>
<!---End-gallery----->

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