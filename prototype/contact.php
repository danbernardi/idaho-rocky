<?php include('header.php'); ?>

<section class="content">
	<aside>
		<div class="fixedscroll">
			<nav>
				<h5>Contact Info</h5>
				<div class="textbox">
					<p>Idaho Rocky Mountain Ranch<br>
					HC64 Box 9934 <br>
					Stanley, Idaho 83278</p>
					
					<p><i class="fa fa-phone"></i>(208) 774-3544<br>
					<i class="fa fa-fax"></i>(208) 774-3477<br>
					<i class="fa fa-envelope-o"></i><a href="mailto:info@idahorocky.com">info@idahorocky.com</a></p>
					
					<div class="quickcontact">
						<h4>Have a Quick Question?</h4>
						<form>
							<input type="text" placeholder="Full Name" name="name">
							<input type="text" placeholder="Email Address" name="mail">
							<input type="text" placeholder="Phone Number" name="tel">
							<textarea name="message" placeholder="Message"></textarea>
							<input type="submit" name="submit" value="Submit">
						</form>
					</div>
				</div>
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
			
			<label>Enter a message (optional):</label>
			<textarea name="message"></textarea>
			
			<input type="submit" name="submit" value="Submit">
			
			<div class="divider"></div>
			
			<p>If you would like to dine at the Ranch, but are not able to stay with us, please phone, email or complete the form above, indicating your preferred dining dates in the Message box. Our <a href="dining.php">Dining section</a> describes each evening’s dining style.</p>
		</form>
		
		<div class="divider"></div>
		
		<iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d366610.5012458762!2d-114.86382667554034!3d44.121640718446386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54a8f7aac669a253%3A0x1819f652b40a0a5b!2sIdaho+Rocky+Mountain+Ranch!5e0!3m2!1sen!2sus!4v1415657890573" width="100%" height="250" frameborder="0"></iframe>
		
		<div class="divider"></div>
		
		<h4>Location &amp; Travel</h4>
		<img class="alignright" src="img/sawtooth-wild-map.jpg" alt="Sawtooth Wild Map"><p>The ranch is located 9 miles South of Stanley, Idaho on Highway 75 between milepost markers 180 and 181, on the route of the Salmon River - Sawtooth Scenic Byways, one of the Top 10 Drives in the Northern Rockies.  In the summer look for the large entrance sign on the east side of 75; the winter office location is across the highway, on the west.</p>

		<p>Guests who are not local typically fly into Boise, which is a scenic three-hour drive from the Ranch. Alternatively, the Hailey airport which services nearby Sun Valley is an hour and a half by car. The route to the Ranch from Sun Valley airport is over the Galena Summit, providing spectacular views of the Sawtooth Valley.</p>

		<p>As the IRMR is situated in the Sawtooth Valley 6,600 feet above sea level, we recommend an appropriate cold weather jacket for those cool mornings and crisp evenings.</p>
		
		<div class="divider"></div>
		<a class="solidbtn" href="files/Directions_Boise_Airport_to_IRMR.pdf" target="_blank">Driving Directions - pdf</a>
		<a class="solidbtn" href="lodging.php" target="_blank">View Accommodations</a>
		<div class="divider"></div>
		
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