<?php include('header.php'); ?>

<section class="content">
	<aside>
		<div class="fixedscroll">
			<nav>
				<h5><a href="the-experience.php">The Experience</a></h5>
				<ul>
					<li><a href="the-experience-the-ranch-experience.php">The Ranch Experience</a></li>
					<li><a href="#">A Day in the Life</a></li>
					<li><a href="#">Our Flexible Approach</a></li>
					<li><a href="#">The Idaho Rockies</a></li>
					<li><a href="#">Our Rich History</a></li>
				</ul>
			</nav>
		</div>
	</aside>
	<article>
		<h2 class="pagetitle">Contact Us
		<a class="solidbtn red" href="lodging.php">View Accommodations</a></h2>
		
		<div class="divider"></div>
		
		<form>
			
			<h4>Reservation Information Request </h4>
			<span>Please phone, email, or complete the form below for information or to request a reservation.</span> 
			<div class="divider"></div>
			
			<div class="personal">
				<div>
					<label>Full Name:</label>
					<input type="text" name="name">
				</div>

				<div>
					<label>Email Address:</label>
					<input type="email" name="email">
				</div>

				<div>
					<label>Phone Number:</label>
					<input type="tel" name="tel">
				</div>
			</div>
			
			
			<div class="address">
				<div>
					<label>Address:</label>
					<input type="text" name="address">
				</div>

				<div>
					<label>City:</label>
					<input type="text" name="city">
				</div>

				<div>
					<label>State:</label>
					<input type="text" name="state">
				</div>

				<div>
					<label>Zipcode:</label>
					<input type="text" name="zip"> 
				</div>
			</div>
			
			<div class="party">
				<div>
					<label>Number in party:</label>
					<input type="number" name="party" min="1">
				</div>

				<div>
					<label>Number of Adults:</label>
					<input type="number" name="adults" min="1">
				</div>

				<div>
					<label>Number of Children:</label>
					<input type="number" name="children" min="0">
				</div>

				<div>
					<label>Age of Children:</label>
					<input type="number" name="childage" min="0" max="18">
				</div>
			</div>
			
			<div class="misc">
				<div>
					<label>I prefer to be contacted by:</label>
					<select>
						<option>Phone</option>
						<option>Email</option>
						<option>Post Mail</option>
					</select>
				</div>
				
				<div>
					<label>Date of Arrival:</label>
					<input type="date" name="arrival">
				</div>

				<div>
					<label>Date of Departure:</label>
					<input type="date" name="departure">
				</div>
			</div>
			
			<input type="submit" name="submit" value="Submit">
			
			<div class="divider"></div>
			
			<p>If you would like to dine at the Ranch, but are not able to stay with us, please phone, email or complete the form above, indicating your preferred dining dates in the Message box. Our <a href="dining.php">Dining section</a> describes each evening’s dining style.</p>
		</form>
		
		<div class="divider"></div>
		
		<h4>Location &amp; Travel</h4>
		<p>The ranch is located 9 miles South of Stanley, Idaho on Highway 75 between milepost markers 180 and 181, on the route of the Salmon River - Sawtooth Scenic Byways, one of the Top 10 Drives in the Northern Rockies.  In the summer look for the large entrance sign on the east side of 75; the winter office location is across the highway, on the west.</p>

		<p>Guests who are not local typically fly into Boise, which is a scenic three-hour drive from the Ranch. Alternatively, the Hailey airport which services nearby Sun Valley is an hour and a half by car. The route to the Ranch from Sun Valley airport is over the Galena Summit, providing spectacular views of the Sawtooth Valley.</p>

		<p>As the IRMR is situated in the Sawtooth Valley 6,600 feet above sea level, we recommend an appropriate cold weather jacket for those cool mornings and crisp evenings.</p>
		
		<div class="pagenavigation">
			<figure class="previous">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Gallery</h2>
						<p>Go to previous page</p>
						<a href="gallery.php"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>blog</h2>
						<p>Go to next page</p>
						<a href="blog.php"></a>
					</div>
				</figcaption>
			</figure>
		</div>	
		
		<?php include('footer.php'); ?>
	</article>
</section>