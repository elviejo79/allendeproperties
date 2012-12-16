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
					<li class="current-menu-item">
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
					<li>
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
					<h2 class="title-bg">Search Results</h2>
					
					<div id="sortable-search">
						<select> 
							<option value="" selected="selected">Default Sorting</option> 
							<option value="">Most Recent</option>
							<option value="">Price (high to low)</option> 
							<option value="">Price (low to high)</option> 
						</select>
					</div>
					
					
	
					
					<div id="map-container">
						<div id="map-listing"></div>
					</div>
					<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
					<script src="js/jquery.gomap-1.3.2.min.js"></script>
					<script type="text/javascript"> 
					jQuery(document).ready(function($) {
					    $("#map-listing").goMap({ 
					        markers: [{  
						
					            address: '7931 FERRARI WAY, WINDSOR CA 95492', 
					            title: 'marker title 1' ,
								icon: 'images/home.png',
								html: {content: '<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" class="alignright" width="70" height="100" alt=""></a><div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div><div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div><div class="property-information-price"><a href="property-single.php">$896,000</a></div><a href="property-single.php" class="view-listing-map">View Listing</a>'}
								
								},	{  
								latitude: 38.534831, 
								longitude: -122.801437, 
								title: 'marker title 3' ,
								icon: 'images/home.png' ,
								html: {content: '<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" class="alignright" width="70" height="100" alt=""></a><div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div><div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div><div class="property-information-price"><a href="property-single.php">$896,000</a></div><a href="property-single.php" class="view-listing-map">View Listing</a>'}
								
								
								},	{  
								address: '1243 Eagle Dr, Windsor, CA 95492', 
								title: 'marker title 4' ,
								icon: 'images/home.png' ,
								html: {content: '<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" class="alignright" width="70" height="100" alt=""></a><div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div><div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div><div class="property-information-price"><a href="property-single.php">$896,000</a></div><a href="property-single.php" class="view-listing-map">View Listing</a>'}
								
								
								
								},	{  
								address: 'Maple Dr, Windsor, CA 95492', 
								title: 'marker title 4' ,
								icon: 'images/home.png' ,
								html: {content: '<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" class="alignright" width="70" height="100" alt=""></a><div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div><div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div><div class="property-information-price"><a href="property-single.php">$896,000</a></div><a href="property-single.php" class="view-listing-map">View Listing</a>'}
								
								},	{  
								address: '1457 Golf Course Dr, Windsor, CA 95492', 
								title: 'marker title 4' ,
								icon: 'images/home.png' ,
								html: {content: '<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" class="alignright" width="70" height="100" alt=""></a><div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div><div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div><div class="property-information-price"><a href="property-single.php">$896,000</a></div><a href="property-single.php" class="view-listing-map">View Listing</a>'}
								

					        }],
							disableDoubleClickZoom: true,
							zoom: 14,
							address: '1317-1383 Mitchell Ln, Windsor, CA 95492', //have this be the first items address so that one is centered
							maptype: 'ROADMAP' 
					    }); 

					});
					</script>
					
					
					
					
					
					<div class="property-listing">
						
						<div class="property-listing-thumb">
							<div class="notification-listing">Open House</div>
							<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" alt=""></a>
						</div>
						
						<div class="property-information">
							<div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div>
							<div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div>
							<div class="property-information-price"><a href="property-single.php">$896,000</a></div>
							<div class="property-highlight">
								<div class="sq-highlight">3000m2</div>
								<div class="bed-higlight">5 bedrooms</div>
								<div class="bath-higlight">4 baths</div>
							</div>
							<div class="property-highlight">
								<div class="garage-higlight">2 Car Garage</div>
								<div class="time-higlight">Listed 6 days ago</div>
							</div>
							<div class="property-highlight">
								<div class="open-house"><span>Open House</span>: Fri 2/18, 2pm - 4pm</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- close property-information-->
						
						<div class="clearfix"></div>
						
						<div class="property-listing-base">
							<div class="grid2column">
								<div class="property-status">Property Status: <a href="#">For Rent</a></div>
							</div>
							<div class="grid2column lastcolumn">
								<a href="property-single.php" class="button secondary-button">View Listing</a>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div><!-- close .property-listing-base -->
					</div>
					
					
					
					
					<div class="property-listing">
						
						<div class="property-listing-thumb">
							<div class="notification-listing">Open House</div>
							<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" alt=""></a>
						</div>
						
						<div class="property-information">
							<div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div>
							<div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div>
							<div class="property-information-price"><a href="property-single.php">$896,000</a></div>
							<div class="property-highlight">
								<div class="sq-highlight">3000m2</div>
								<div class="bed-higlight">5 bedrooms</div>
								<div class="bath-higlight">4 baths</div>
							</div>
							<div class="property-highlight">
								<div class="garage-higlight">2 Car Garage</div>
								<div class="time-higlight">Listed 6 days ago</div>
							</div>
							<div class="property-highlight">
								<div class="open-house"><span>Open House</span>: Fri 2/18, 2pm - 4pm</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- close property-information-->
						
						<div class="clearfix"></div>
						
						<div class="property-listing-base">
							<div class="grid2column">
								<div class="property-status">Property Status: <a href="#">For Rent</a></div>
							</div>
							<div class="grid2column lastcolumn">
								<a href="property-single.php" class="button secondary-button">View Listing</a>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div><!-- close .property-listing-base -->
					</div>
					
					
					
					
					
					<div class="property-listing">
						
						<div class="property-listing-thumb">
							<div class="notification-listing">Open House</div>
							<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" alt=""></a>
						</div>
						
						<div class="property-information">
							<div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div>
							<div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div>
							<div class="property-information-price"><a href="property-single.php">$896,000</a></div>
							<div class="property-highlight">
								<div class="sq-highlight">3000m2</div>
								<div class="bed-higlight">5 bedrooms</div>
								<div class="bath-higlight">4 baths</div>
							</div>
							<div class="property-highlight">
								<div class="garage-higlight">2 Car Garage</div>
								<div class="time-higlight">Listed 6 days ago</div>
							</div>
							<div class="property-highlight">
								<div class="open-house"><span>Open House</span>: Fri 2/18, 2pm - 4pm</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- close property-information-->
						
						<div class="clearfix"></div>
						
						<div class="property-listing-base">
							<div class="grid2column">
								<div class="property-status">Property Status: <a href="#">For Rent</a></div>
							</div>
							<div class="grid2column lastcolumn">
								<a href="property-single.php" class="button secondary-button">View Listing</a>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div><!-- close .property-listing-base -->
					</div>
					
					
					
					
					
					<div class="property-listing">
						
						<div class="property-listing-thumb">
							<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" alt=""></a>
						</div>
						
						<div class="property-information">
							<div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div>
							<div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div>
							<div class="property-information-price"><a href="property-single.php">$896,000</a></div>
							<div class="property-highlight">
								<div class="sq-highlight">3000m2</div>
								<div class="bed-higlight">5 bedrooms</div>
								<div class="bath-higlight">4 baths</div>
							</div>
							<div class="property-highlight">
								<div class="garage-higlight">2 Car Garage</div>
								<div class="time-higlight">Listed 6 days ago</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- close property-information-->
						
						<div class="clearfix"></div>
						
						<div class="property-listing-base">
							<div class="grid2column">
								<div class="property-status">Property Status: <a href="#">For Rent</a></div>
							</div>
							<div class="grid2column lastcolumn">
								<a href="property-single.php" class="button secondary-button">View Listing</a>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div><!-- close .property-listing-base -->
					</div>
					
					
					
					
					
					<div class="property-listing">
						
						<div class="property-listing-thumb">
							<a href="property-single.php"><img src="images/demo/property-thumbnail.jpg" alt=""></a>
						</div>
						
						<div class="property-information">
							<div class="property-information-address"><a href="property-single.php">256 Tree Hill Rd</a></div>
							<div class="property-information-location"><a href="property-single.php">Newcastle, PA 13785</a></div>
							<div class="property-information-price"><a href="property-single.php">$896,000</a></div>
							<div class="property-highlight">
								<div class="sq-highlight">3000m2</div>
								<div class="bed-higlight">5 bedrooms</div>
								<div class="bath-higlight">4 baths</div>
							</div>
							<div class="property-highlight">
								<div class="garage-higlight">2 Car Garage</div>
								<div class="time-higlight">Listed 6 days ago</div>
							</div>
							<div class="clearfix"></div>
						</div><!-- close property-information-->
						
						<div class="clearfix"></div>
						
						<div class="property-listing-base">
							<div class="grid2column">
								<div class="property-status">Property Status: <a href="#">For Rent</a></div>
							</div>
							<div class="grid2column lastcolumn">
								<a href="property-single.php" class="button secondary-button">View Listing</a>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div><!-- close .property-listing-base -->
					</div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
				<div class="clearfix"></div>
				</div><!-- close .content-boxed -->

				
				
				
				<div class="clearfix"></div>
				<div class="page-count">Page 2 of 19</div>
				<div class='pagination'>
					<a href='#'><span class='arrows'>&lsaquo;</span></a>
					<a href='#' class='inactive'>1</a>
					<a href='#' class='selected' >2</a>
					<a href='#' class='inactive' >3</a>
					<a href='#'><span class='arrows'>&rsaquo;</span></a>
				</div>
				<div class="clearfix"></div>
				
				
			</div><!-- close #container-sidebar -->
			
			<div id="sidebar">
				
				
				<div class="content-boxed">
					<h2 class="title-bg">Advanced Search</h2>
					
					<div class="advanced-search-form">
					<form method="get" class="advanced-searchform" action="">
						<div><input type="text" class="field" name="keyword" id="keyword" placeholder="Enter a keyword..." /></div>
						
						<div>
							<select> 
								<option value="" selected="selected">Property Status</option> 
								<option value="">For Rent</option> 
								<option value="">For Sale</option> 
								<option value="">Open House</option> 
							</select>
							
						</div>
						
						<div class="advanced-two-column">
							<label for="locations" class="assistive-text">Price Min:</label>
							<input type="text" class="field" name="price-min" id="price-min" placeholder="Min Price" />
						</div>	
						<div class="advanced-two-column last-two-column">
							<label for="locations" class="assistive-text">Price Max:</label>
							<input type="text" class="field" name="price-max" id="price-max" placeholder="Max price" />
						</div>
						<div class="clearfix"></div>
						
						<div>
							<select> 
								<option value="" selected="selected">Choose City</option> 
								<option value="">City 1</option> 
								<option value="">City 1</option> 
								<option value="">City 1</option> 
								<option value="">City 1</option> 
								<option value="">City 1</option> 
							</select>
						</div>
						
						<div class="advanced-two-column drop-down-fix">
							<label for="locations" class="assistive-text">State:</label>
							<select> 
								<option value="" selected="selected">State</option> 
								<option value="">State 1</option> 
								<option value="">State 1</option> 
								<option value="">State 1</option> 
								<option value="">State 1</option> 
								<option value="">State 1</option> 
							</select>
						</div>	
						<div class="advanced-two-column last-two-column">
							<label for="locations" class="assistive-text">Zip code:</label>
							<select> 
								<option value="" selected="selected">Zip</option> 
								<option value="">Zipcode 1</option> 
								<option value="">Zipcode 1</option> 
								<option value="">Zipcode 1</option> 
								<option value="">Zipcode 1</option> 
								<option value="">Zipcode 1</option> 
							</select>
						</div>
						
						<div class="clearfix"></div>
						
						<div class="advanced-two-column drop-down-fix">
							<label for="locations" class="assistive-text">Beds:</label>
							<select> 
								<option value="" selected="selected">Beds</option> 
								<option value="">1+ ba</option> 
								<option value="">2+ ba</option> 
								<option value="">3+ ba</option> 
								<option value="">4+ ba</option> 
							</select>
						</div>	
						<div class="advanced-two-column last-two-column">
							<label for="locations" class="assistive-text">Baths:</label>
							<select> 
								<option value="" selected="selected">Baths</option> 
								<option value="">1+ bd</option> 
								<option value="">2+ bd</option> 
								<option value="">3+ bd</option> 
								<option value="">4+ bd</option> 
							</select>
						</div>
						<div class="clearfix"></div>
						
						<div class="drop-down-spacing">
							<select> 
								<option value="" selected="selected">Property Types</option> 
								<option value="">Single Family</option> 
								<option value="">Condo</option> 
								<option value="">Townhouse</option> 
								<option value="">Multi-Family</option> 
							</select>
						</div>
						
						<div>
							<select> 
								<option value="" selected="selected">Square Feet</option> 
								<option value="">250+ sqft</option> 
								<option value="">500+ sqft</option> 
								<option value="">1000+ sqft</option> 
								<option value="">1250+ sqft</option> 
								<option value="">1500+ sqft</option> 
							</select>
						</div>
						
						<div><input type="submit" class="submit-advanced" name="submit" value="Search" /></div>
					</form>
					</div>
				</div><!-- close .content-boxed -->
				
				
				<div class="content-boxed">
					<h2 class="title-bg">Featured Listings</h2>
					<ul class="widget-listings">
					<li>
						<a href="#">
						<div class="property-thumbnail">
							<img src="images/demo/widget-thumbnail.jpg" alt="">
						</div>
						<div class="property-meta">
							<div class="listings-address-widget">3200 Oak Rd</div>
							<div class="listings-street-widget">Boulder, CO 25753</div>
							<div class="listings-price-widget">$750,000</div>
						</div>
						<div class="clearfix"></div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="property-thumbnail">
							<img src="images/demo/widget-thumbnail.jpg" alt="">
						</div>
						<div class="property-meta">
							<div class="listings-address-widget">3200 Oak Rd</div>
							<div class="listings-street-widget">Boulder, CO 25753</div>
							<div class="listings-price-widget">$750,000</div>
						</div>
						<div class="clearfix"></div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="property-thumbnail">
							<img src="images/demo/widget-thumbnail.jpg" alt="">
						</div>
						<div class="property-meta">
							<div class="listings-address-widget">3200 Oak Rd</div>
							<div class="listings-street-widget">Boulder, CO 25753</div>
							<div class="listings-price-widget">$750,000</div>
						</div>
						<div class="clearfix"></div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="property-thumbnail">
							<img src="images/demo/widget-thumbnail.jpg" alt="">
						</div>
						<div class="property-meta">
							<div class="listings-address-widget">3200 Oak Rd</div>
							<div class="listings-street-widget">Boulder, CO 25753</div>
							<div class="listings-price-widget">$750,000</div>
						</div>
						<div class="clearfix"></div>
						</a>
					</li>
					</ul>
					
					
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
				
				
				
				
				
				
			</div><!-- close #sidebar -->
			
			
			
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->

<?php include("footer.php"); ?>