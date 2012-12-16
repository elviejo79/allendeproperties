<?php
//If the form is submitted
if(isset($_POST['submit'])) {
	
	$comments = $_POST['message'];

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}


	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'mike@progressionstudios.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, 'Your Website Subject', $body, $headers);
		$emailSent = true;
	}
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Freehold Site Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:700|Open+Sans:600' rel='stylesheet' type='text/css'><!-- Custom Google Fonts -->

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

	<script src="js/plugins.js"></script>
	<script src="js/script.js"></script>
	
</head>
<body>
	
	<div class="header-top">
		<div class="width-container">
			<div class="header-top-left">
				<span class="phone-header-top">(800) 536-3532</span>
				<a href="mailto:no-reply@progressionstudios.com" class="email-header-top">no-reply@progressionstudios.com</a>
			</div><!-- close .header-top-left -->
			<div class="social-icons">
					<a class="rss" href="#" target="_blank">r</a>
					<a class="facebook" href="http://facebook.com" target="_blank">F</a>
					<a class="twitter" href="https://twitter.com/Progression_S" target="_blank">t</a>
					<a class="skype" href="http://skype.com" target="_blank">s</a>
					<a class="vimeo" href="http://vimeo.com" target="_blank">v</a>
					<a class="linkedin" href="http://linkedin.com/" target="_blank">l</a>
					<a class="dribbble" href="http://dribbble.com/" target="_blank">d</a>
					<!--a class="forrst" href="http://forrst.com/" target="_blank">f</a-->
					<!--a class="flickr" href="http://flickr.com" target="_blank">n</a-->
					<!--a class="google" href="http://google.com" target="_blank">g</a-->
					<!--a class="youtube" href="http://youtube.com" target="_blank">y</a-->
			</div><!-- close .social-icons -->
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div>
	
	<header>
		<div class="header-border-top"></div>
		<div class="width-container">
			
			<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="Freehold Theme"></a></h1>
			
			<nav>
				<ul class="sf-menu">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="property-listings.html">Properties</a>
						<ul>
							<li>
								<a href="property-listings.html">For Rent</a>
							</li>
							<li>
								<a href="property-listings.html">For Sale</a>
							</li>
							<li>
								<a href="property-listings.html">Open Houses</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="agents.html">Agents</a>
					</li>
					<li>
						<a href="page-styles.html">Pages</a>
						<ul>
							<li>
								<a href="index2.html">Home Page V2</a>
							</li>
							<li>
								<a href="page-styles.html">Page Styles</a>
							</li>
							<li>
								<a href="full-width.html">Full Width</a>
							</li>
							<li>
								<a href="portfolio-2-column.html">2 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio-3-column.html">3 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio.html">4 Column Portfolio</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="blog.html">Blog</a>
					</li>
					<li class="current-menu-item">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		<div class="header-border-bottom"></div>
	</header>
	
	<div id="search-container">
		<div class="width-container">
			<form method="get" class="searchform" action="">
				<label for="s" class="assistive-text">Search:</label>
				<input type="text" class="field" name="s" id="s" placeholder="Enter an address, neighborhood, zip or city..." />
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
				
				<div class="clearfix"></div>
				<div id="panel-search">
					
					<div class="header-advanced-pricing">
						<input type="text" class="field" name="price-min" id="price-min" placeholder="Min Price" />
					</div>
					
					<div class="price-range">to</div>
					
					<div class="header-advanced-pricing">
						<input type="text" class="field" name="price-max" id="price-max" placeholder="Max Price" />
					</div>
					
		
					
					<div class="header-advanced-bedbath">
						<select> 
							<option value="" selected="selected">Beds</option> 
							<option value="">1+ ba</option> 
							<option value="">2+ ba</option> 
							<option value="">3+ ba</option> 
							<option value="">4+ ba</option> 
						</select>
					</div>		
					
					
					<div class="header-advanced-bedbath">
						<select> 
							<option value="" selected="selected">Baths</option> 
							<option value="">1+ bd</option> 
							<option value="">2+ bd</option> 
							<option value="">3+ bd</option> 
							<option value="">4+ bd</option> 
						</select>
					</div>
					
					<div class="header-prop-typestatus">
						<select> 
							<option value="" selected="selected">Square Feet</option> 
							<option value="">250+ sqft</option> 
							<option value="">500+ sqft</option> 
							<option value="">1000+ sqft</option> 
							<option value="">1250+ sqft</option> 
							<option value="">1500+ sqft</option> 
						</select>
					</div>
					
					<div class="header-prop-typestatus">
						<select> 
							<option value="" selected="selected">Property Types</option> 
							<option value="">Single Family</option> 
							<option value="">Condo</option> 
							<option value="">Townhouse</option> 
							<option value="">Multi-Family</option> 
						</select>
					</div>
					
					<div class="header-prop-typestatus hidden-value-tablet">
						<select> 
							<option value="" selected="selected">Property Status</option> 
							<option value="">For Rent</option> 
							<option value="">For Sale</option> 
							<option value="">Open House</option> 
						</select>
					</div>
					
					<a class="more-search-options" href="#blanksearch">More search options</a>
			
				</div>
				
			</form>
		</div><!-- close width-container -->
		
		
		
	<div class="clearfix"></div>
	</div><!-- close #search-container -->

	<div class="width-container">
		<a href="#" class="search-drop-down">Search More</a>
	</div>

	
	

	
	<div id="main">
		<div class="width-container">

			<div id="container-sidebar">
				<div class="content-boxed">
					<h2 class="title-bg">Contact us</h2>
					
					
					<div id="map-contact"></div>
					<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
					<script src="js/jquery.gomap-1.3.2.min.js"></script>
					<script type="text/javascript"> 
					jQuery(document).ready(function($) {
					    $("#map-contact").goMap({ 
					        markers: [{  
					            address: 'San Francisco, CA', 
					            title: 'marker title 1' ,
								icon: 'images/home.png',
								html: {content: 'Progression Studios<br>256 Tree Hill Rd<br>Newcastle, PA 13785'}
							
					        }],
							disableDoubleClickZoom: true,
							zoom: 12,
							maptype: 'ROADMAP'
					    }); 

					});
					</script>
					
					<h4>Send us a message</h4>

					<div id="contact-wrapper">
						<script type="text/javascript">
							jQuery(document).ready(function(){
								jQuery("#contactform").validate();
							});
						</script>


						<?php if(isset($hasError)) { //If errors are found ?>
							<p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
						<?php } ?>

						<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
							<p class="success">Email Successfully Sent!</p>
							<p class="success2">Thank you <strong><?php echo $name;?></strong> for using my contact form! I will be in touch with you soon.</p>
						<?php } ?>

						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
								<div><input type="text" size="28" name="contactname" id="contactname" value="" class="required" placeholder="Name*" /></div>

								<div><input type="text" size="28" name="email" id="email" value="" class="required email" placeholder="E-mail*" /></div>

								<div><textarea rows="12" cols="38" name="message" id="message" placeholder="Enter a message"></textarea></div>

								<div><input type="submit" value="Send Message" name="submit" class="submit" /></div>
						</form>

					</div><!-- close #contact-wrapper -->
					
				
				<div class="clearfix"></div>
				</div><!-- close .content-boxed -->

				
				
				
			</div><!-- close #container-sidebar -->
			
			<div id="sidebar">
				
				
				<div class="content-boxed">
					<h2 class="title-bg">Contact Us</h2>
					<div class="location-widget">
						<span>Location</span>: 156 University Ave. <br>
						Palo Alto, CA 94301-1605.
						<br><span>Phone</span>: 650-543-4800
						<br><span>Mobile</span>: 650-543-4801
						<br><span>Email</span>: <a href="#">admin@facebook.com</a>
					</div>
				</div><!-- close .content-boxed -->
				
				
				<div class="content-boxed">
					<h2 class="title-bg">Social Networks</h2>
					<div class="social-icons-widget">
						<a href="#" target="_blank" class="social-rss">RSS</a>
						<a href="http://facebook.com" target="_blank" class="social-facebook">Facebook</a>
						<a href="http://twitter.com" target="_blank" class="social-twitter">Twitter</a>
						<a href="http://skype.com" target="_blank" class="social-skype">skype</a>
						<a href="http://vimeo.com" target="_blank" class="social-vimeo">Vimeo</a>
						
						<a href="http://linkedin.com" target="_blank" class="social-linkedin">linkedin</a>
						<a href="http://dribbble.com" target="_blank" class="social-dribbble">Dribbble</a>
						<a href="http://flickr.com" target="_blank" class="social-flickr">flickr</a>
						<a href="http://forrst.com" target="_blank" class="social-forrst">forrst</a>
						<a href="http://google.com" target="_blank" class="social-google">google</a>
						<!--a href="http://youtube.com" target="_blank" class="social-youtube">youtube</a-->

						<div class="clearfix"></div>
						
					</div><!-- close .social-icons -->
				</div><!-- close .content-boxed -->
				
				
				
				<div class="content-boxed">
					<h2 class="title-bg">Twitter Feed</h2>
					<script type="text/javascript">
					jQuery(window).load(function() {
						jQuery('.tweets-widget1').jtwt({image_size :25, count : 2, username: 'envato', convert_links : 1, loader_text : 'Loading new tweets...'});   
					});                      
					</script>
					<div id="tweets-sidebar" class="tweets-widget1"></div>
					<div class="clearfix"></div>
				</div><!-- close .content-boxed -->
				
				<div class="content-boxed">
					<h2 class="title-bg">Flickr Feed</h2>
					<script type="text/javascript">
					//Flickr Widget in Sidebar			
					jQuery(document).ready(function($){		 			   
						// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
						$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&lang=en-us&format=json&jsoncallback=?", displayImages);  //YOUR IDGETTR GOES HERE
						function displayImages(data){																															   
							// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
							var iStart = Math.floor(Math.random()*(0));	

							// Reset our counter to 0
							var iCount = 1;								

							// Start putting together the HTML string
							var htmlString = "<ul>";					

							// Now start cycling through our array of Flickr photo details
							$.each(data.items, function(i,item){

								// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
								if (iCount > iStart && iCount < (iStart + 7)) {

									// I only want the ickle square thumbnails
									var sourceSquare = (item.media.m).replace("_m.jpg", "_s.jpg");		

									// Here's where we piece together the HTML
									htmlString += '<li><a href="' + item.link + '" target="_blank">';
									htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
									htmlString += '</a></li>';
								}
								// Increase our counter by 1
								iCount++;
							});		

						// Pop our HTML in the #images DIV	
						$('.flickr-widget-1').html(htmlString + "</ul>");

						// Close down the JSON function call
						}

					// The end of our jQuery function	
					});
					</script>
					<div id="flickr-widget" class="flickr-widget-1"></div>
					<div class="clearfix"></div>
				</div><!-- close .content-boxed -->
				
				
				
				
				
				
			</div><!-- close #sidebar -->
			
			
			
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->

	<footer>
		<div class="width-container">
				
				<div class="grid4column">
					<h4>About us</h4>
					<p>liquam est tortor, sagittis in fringilla in, pellentesque nec erat. Aenean semper, neque non faucibus</p>

					<p>Malesuada, dui felis tempor felis, vel varius ante diam ut mauris. Aliquam nibh tellus, viverra ut tristique sed, interdum sed mauris.</p>
				</div>
				
				<div class="grid4column">
					<h4>Property Types</h4>
					<ul>
						<li><a href="#">Single Home</a></li>
						<li><a href="#">Family Home</a></li>
						<li><a href="#">Apartment</a></li>
						<li><a href="#">Villa</a></li>
						<li><a href="#">Condo</a></li>
						<li><a href="#">Other</a></li>
					</ul>
				</div>
				
				<div class="grid4column">
					<h4>Meta</h4>
					<ul>
						<li><a href="#">Login</a></li>
						<li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="#">WordPress.org</a></li>
					</ul>
				</div>
				
				<div class="grid4column lastcolumn">
					<h4>Contact us</h4>
					<div class="location-widget">
						<span>Location</span>: 156 University Ave. <br>
						Palo Alto, CA 94301-1605.
						<br><span>Phone</span>: 650-543-4800
						<br><span>Mobile</span>: 650-543-4801
						<br><span>Email</span>: <a href="#">admin@facebook.com</a>
					</div>
				</div>
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		<div id="copyright">
			<div class="width-container">
				<span class="copyright-left">
				&copy; 2012 All Rights Reserved.  Developed by <a href="http://progressionstudios.com/" target="_blank">Progression Studios</a></span>
				<a href="#" id="scrollToTop">Scroll to top</a>
			<div class="clearfix"></div>
			</div><!-- close .width-container -->	
		</div><!-- close #copyright -->
	</footer>
	
</body>
</html>