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

			<div id="container-sidebar">
				<div class="content-boxed">
					<h2 class="title-bg">Page Styles</h2>
					
					
					<h4>List Styles</h4>
					
					<div class="grid2column">
						<ul class="checkmark">
							<li>Item #1</li>
							<li>Item #2</li>
							<li>Item #3</li>
							<li>Item #4</li>
						</ul>
					</div>
					
					<div class="grid2column lastcolumn">
						<ul class="arrow">
							<li>Item #1</li>
							<li>Item #2</li>
							<li>Item #3</li>
							<li>Item #4</li>
						</ul>
					</div>
					<div class="clearfix"></div>
					
					
					<div class="grid2column">
						<ul>
							<li>Item #1</li>
							<li>Item #2</li>
							<li>Item #3</li>
							<li>Item #4</li>
						</ul>
					</div>
					
					<div class="grid2column lastcolumn">
						<ol>
							<li>Item #1</li>
							<li>Item #2</li>
							<li>Item #3</li>
							<li>Item #4</li>
						</ol>
					</div>
					<div class="clearfix"></div>
					
					<hr>
					
					
					<h4>Default Button</h4>
					
					<div class="grid2column">
						<a href="http://themeforest.net/user/ProgressionStudios?ref=ProgressionStudios" target="_blank" class="button">Default Button</a>
					</div>
					
					<div class="grid2column lastcolumn">
						<a href="http://themeforest.net/user/ProgressionStudios?ref=ProgressionStudios" target="_blank" class="button secondary-button">Secondary Button</a>
					</div>
					<div class="clearfix"></div>
					
					<hr>
					
					<h4>Tabbed Content</h4>
					
					<!-- Standard <ul> with class of "tabs" -->
					<ul class="tabs">
					  <!-- Give href an ID value of corresponding "tabs-content" <li>'s -->
					  <li><a class="active" href="#simple">Simple</a></li>
					  <li><a href="#lightweight">Lightweight</a></li>
					  <li><a href="#mobileFriendly">Mobile</a></li>
					</ul>

					<!-- Standard <ul> with class of "tabs-content" -->
					<ul class="tabs-content">
					  <!-- Give ID that matches HREF of above anchors -->
					  <li class="active" id="simple">The tabs are clean and simple unordered-list markup and basic CSS.</li>
					  <li id="lightweight">The tabs are cross-browser, but don't need a ton of hacky CSS or markup.</li>
					  <li id="mobileFriendly">The tabs work like a charm even on mobile devices.</li>
					</ul>
					
					<hr>
					
					<h4>Featured Slider</h4>
					
					<div class="secondary-slider">
					<div class="flexslider">
			          <ul class="slides">
			            <li>
			  	    	    <a href="#">
								<img src="images/demo/slide1.jpg" alt="" />
							</a>
			  	    	</li>
			  	    	<li>
			  	    	    <a href="#">
								<img src="images/demo/slide2.jpg" alt="" />
							</a>
			  	    	</li>
						<li>
			  	    	    <a href="#">
								<img src="images/demo/slide3.jpg" alt="" />
							</a>
			  	    	</li>
						<li>
			  	    	    <a href="#">
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
							slideshowSpeed: 6000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
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
					
					
					<hr>
					
					<h4>Column Examples</h4>
					
					
					<div class="grid2column">
						<h5>1/2</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</p>
					</div>

					<div class="grid2column lastcolumn">
						<h5>1/2</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</p>
					</div>
					<div class="clearfix"></div>





					<div class="grid2column">
						<h5>1/2</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</p>
					</div>

					<div class="grid4column">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>

					<div class="grid4column lastcolumn">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>
					<div class="clearfix"></div>




					<div class="grid4column">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>

					<div class="grid4column">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>

					<div class="grid4column">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>

					<div class="grid4column lastcolumn">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>
					<div class="clearfix"></div>





					<div class="grid4columnbig">
						<h5>3/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</p>
					</div>

					<div class="grid4column lastcolumn">
						<h5>1/4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>
					<div class="clearfix"></div>





					<div class="grid3column">
						<h5>1/3</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>

					<div class="grid3column">
						<h5>1/3</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>

					<div class="grid3column lastcolumn">
						<h5>1/3</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>
					<div class="clearfix"></div>





					<div class="grid3columnbig">
						<h5>2/3</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus. Aenean erat ligula, pharetra non eleifend a, luctus ac orci. Integer euismod dignissim sodales. Curabitur massa lorem, consequat quis consectetur vel, imperdiet id dui. Integer tristique risus placerat tellus convallis et interdum lorem feugiat. Etiam pretium lacus vel eros semper at feugiat eros rutrum.</p>
					</div>

					<div class="grid3column lastcolumn">
						<h5>1/3</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue dolor, semper eu cursus et, pulvinar tempor nisl. Nullam iaculis rutrum posuere. Morbi volutpat tempus nisi sit amet ultrices. Nullam nec sollicitudin enim. Integer a diam nisi, non vestibulum lacus.</p>
					</div>
					<div class="clearfix"></div>
					
				
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

<?php include("footer.php"); ?>