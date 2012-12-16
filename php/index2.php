<?php include("header.php"); ?>
	
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
			
			<h1 id="logo"><a href="index.php"><img src="images/logo.png" alt="Freehold Theme"></a></h1>
			
			<nav>
				<ul class="sf-menu">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="property-listings.php">Properties</a>
						<ul>
							<li>
								<a href="property-listings.php">For Rent</a>
							</li>
							<li>
								<a href="property-listings.php">For Sale</a>
							</li>
							<li>
								<a href="property-listings.php">Open Houses</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="agents.php">Agents</a>
					</li>
					<li class="current-menu-item">
						<a href="page-styles.php">Pages</a>
						<ul>
							<li>
								<a href="index2.php">Home Page V2</a>
							</li>
							<li>
								<a href="page-styles.php">Page Styles</a>
							</li>
							<li>
								<a href="full-width.php">Full Width</a>
							</li>
							<li>
								<a href="portfolio-2-column.php">2 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio-3-column.php">3 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio.php">4 Column Portfolio</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
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
			
			<div id="featured-slider">
			<div class="flexslider">
	          <ul class="slides">
	            <li>
	  	    	    <a href="property-listings.php">
						<img src="images/demo/slide1.jpg" alt="" />
					</a>
	  	    	</li>
	  	    	<li>
	  	    	    <a href="property-listings.php">
						<img src="images/demo/slide2.jpg" alt=""  />
					</a>
	  	    	</li>
				<li>
	  	    	    <a href="property-listings.php">
						<img src="images/demo/slide3.jpg" alt="" />
					</a>
	  	    	</li>
				<li>
	  	    	    <a href="property-listings.php">
						<img src="images/demo/slide4.jpg" alt="" />
					</a>
	  	    	</li>
	          </ul>
	        </div>
			</div>
			<div class="clearfix"></div>
			<script type="text/javascript">
			jQuery(document).ready(function($) {
			    $('.flexslider').flexslider({
					animation: "fade",              //String: Select your animation type, "fade" or "slide"
					slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
					slideshow: true,                //Boolean: Animate slider automatically
					slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
					animationDuration: 500,         //Integer: Set the speed of animations, in milliseconds
					directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
					controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
					keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
					mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
					prevText: "Previous",           //String: Set the text for the "previous" directionNav item
					nextText: "Next",               //String: Set the text for the "next" directionNav item
					pausePlay: false,               //Boolean: Create pause/play dynamic element
					pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
					playText: 'Play',               //String: Set the text for the "play" pausePlay item
					randomize: false,               //Boolean: Randomize slide order
					slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
					useCSS: true,
					animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
					pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
					pauseOnHover: false            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering

			    });
			});
			</script>
			
			

				<div class="content-boxed">
					<h2 class="title-bg">Welcome Home</h2>

				
					
					<div class="grid3column">
						<h4>Property Owners</h4>
						<img src="images/demo/icon-1.png" class="alignright" alt="" >
						<p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit. Etiam egestas, tellus sit amet vulputate hendrerit, eros lectus gravida lectus, ut posuere purus ante posuere leo. Vivamus tristique dictum dignissim. Cras ac elit eros.</p>
						<p><a href="#">Learn more &rarr;</a></p>
					</div>
					
					<div class="grid3column">
						<h4>Property Renters</h4>
						<img src="images/demo/icon-2.png" class="alignright" alt="" >
						<p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit. Etiam egestas, tellus sit amet vulputate hendrerit, eros lectus gravida lectus, ut posuere purus ante posuere leo. Vivamus tristique dictum dignissim. Cras ac elit eros.</p>
						<p><a href="#">Learn more &rarr;</a></p>
					</div>
					
					
					<div class="grid3column lastcolumn">
						<h4>Property management</h4>
						<img src="images/demo/icon-3.png" class="alignright" alt="" >
						<p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit. Etiam egestas, tellus sit amet vulputate hendrerit, eros lectus gravida lectus, ut posuere purus ante posuere leo. Vivamus tristique dictum dignissim. Cras ac elit eros.</p>
						<p><a href="#">Learn more &rarr;</a></p>
					</div>
					
					<div class="clearfix"></div>
					
					<hr>
					
					
					
					<div class="grid3column">
						<h4>Real Estate Tips</h4>
						<img src="images/demo/icon-4.png" class="alignright" alt="" >
						<p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit. Etiam egestas, tellus sit amet vulputate hendrerit, eros lectus gravida lectus, ut posuere purus ante posuere leo. Vivamus tristique dictum dignissim. Cras ac elit eros.</p>
						<p><a href="#">Learn more &rarr;</a></p>
					</div>
					
					<div class="grid3column">
						<h4>Home Values</h4>
						<img src="images/demo/icon-5.png" class="alignright" alt="" >
						<p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit. Etiam egestas, tellus sit amet vulputate hendrerit, eros lectus gravida lectus, ut posuere purus ante posuere leo. Vivamus tristique dictum dignissim. Cras ac elit eros.</p>
						<p><a href="#">Learn more &rarr;</a></p>
					</div>
					
					
					<div class="grid3column lastcolumn">
						<h4>Choose a Real Estate Agent</h4>
						<img src="images/demo/icon-6.png" class="alignright" alt="" >
						<p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit. Etiam egestas, tellus sit amet vulputate hendrerit, eros lectus gravida lectus, ut posuere purus ante posuere leo. Vivamus tristique dictum dignissim. Cras ac elit eros.</p>
						<p><a href="#">Learn more &rarr;</a></p>
					</div>
					
					<div class="clearfix"></div>
					

			
					
					
				
				<div class="clearfix"></div>
				</div><!-- close .content-boxed -->
				
				
		
				
	
			
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->

<?php include("footer.php"); ?>