<?php include('header.php'); ?>

<section class="content">
	<aside>
		<div class="fixedscroll">
			<nav class="recentposts">
				<h5><a href="#">Recent Posts</a></h5>
				<ul>
					<li><a href="dining.php">Your Own Private Idaho<br><span>November 3rd, 2014</span></a></li>
					<li><a href="#">Sawtooth Mountains<br><span>October 24th, 2014</span></a></li>
					<li><a href="#">Blog Article #3<br><span>September 9th, 2014</span></a></li>
					<li><a href="#">Blog Article #4<br><span>July 1st, 2014</span></a></li>
				</ul>
				
				<div class="textbox">
					<div class="newsletter">
						<h4>Our Newsletter</h4>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit parturient.</span>
						<form>
							<input type="email" placeholder="Email Address" name="email">
							<input type="submit" value="Sign Up">
						</form>
					</div>
				</div>
			</nav>
		</div>
	</aside>
	<article>
		<h2 class="pagetitle">Your Own Private Idaho</h2>
		<span class="author">by Some Person</span> | 
		<time class="date">August 7, 2013</time>
		<div class="socialshare">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>
		
		<div class="divider"></div>
		
		<img class="alignleft featuredimg" src="img/blog/post01.jpg" alt="New York Times">
		<p><strong>Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod.</strong></p>
		
		<p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

		<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean <a href="#">lacinia bibendum nulla</a> sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus posuere consectetur est at lobortis.</p>
		
		<figure class="floatimg">
			<img src="img/floatimg.jpg">
			<figcaption>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</figcaption>
		</figure>
		
		<h4>Elit Fermentum Sem Vulputate</h4>
		
		<p><strong>Vestibulum id ligula porta felis euismod semper.</strong> Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus posuere consectetur est at lobortis.</p>
		
		<div class="divider"></div>
		
		<h4 class="pagetitle">Leave a Comment</h4>
		
		<form class="comments">
			<input type="text" placeholder="Enter your full name">
			<input type="email" placeholder="Enter your email address">
			<textarea placeholder="Enter a message" rows="23"></textarea>
			<input type="submit" value="Submit">
		</form>
		
		
		<div class="pagenavigation">
			<figure class="previous">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Blog Post #1</h2>
						<p>Go to previous post</p>
						<a href="#"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Blog Post #2</h2>
						<p>Go to next post</p>
						<a href="#"></a>
					</div>
				</figcaption>
			</figure>
		</div>
		
		
		<?php include('footer.php'); ?>
	</article>
</section>

<script>
	
	// initialize simple image slider using slides.js
	$(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528,
			play: {
				active: false,
				auto: true,
				interval: 10000,
				swap: true
			}
      });
    });
	
</script>