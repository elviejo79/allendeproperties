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


				<div class="content-boxed">
					<h2 class="title-bg">Full Width Page</h2>
					
					
					<p>Column Short Codes work the exactly the same on full width pages!</p>
					
					
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

				
				
				
			
			
			
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</div><!-- close #main -->

<?php include("footer.php"); ?>