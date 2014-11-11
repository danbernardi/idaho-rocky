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
		<h2 class="pagetitle">Blog</h2>
		
		<p><strong>Donec id elit non mi porta gravida at eget metus.</strong> Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.</p>
		
		<div class="divider"></div>
		<div class="posts blog">
			
			<div class="item">
				<img class="alignleft" src="img/blog/post01.jpg" alt="New York Times">
				<ul>
					<li><a href="#">“Your Own Private Idaho”</a></li>
					<span class="author">by Some Person</span> | 
					<time class="date">August 7, 2013</time>
				</ul>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
				<a class="solidbtn" href="#">Read More</a>
			</div>
			
			<div class="item">
				<img class="alignleft" src="img/blog/post02.jpg" alt="New York Times">
				<ul>
					<li><a href="#">“Your Own Private Idaho”</a></li>
					<span class="author">by Some Person</span> | 
					<time class="date">August 7, 2013</time>
				</ul>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
				<a class="solidbtn" href="#">Read More</a>
			</div>
			
			<div class="item">
				<img class="alignleft" src="img/blog/post03.jpg" alt="New York Times">
				<ul>
					<li><a href="#">“Your Own Private Idaho”</a></li>
					<span class="author">by Some Person</span> | 
					<time class="date">August 7, 2013</time>
				</ul>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
				<a class="solidbtn" href="#">Read More</a>
			</div>
			
			<div class="item">
				<img class="alignleft" src="img/blog/post04.jpg" alt="New York Times">
				<ul>
					<li><a href="#">“Your Own Private Idaho”</a></li>
					<span class="author">by Some Person</span> | 
					<time class="date">August 7, 2013</time>
				</ul>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
				<a class="solidbtn" href="#">Read More</a>
			</div>
			
			<div class="item">
				<img class="alignleft" src="img/blog/post05.jpg" alt="New York Times">
				<ul>
					<li><a href="#">“Your Own Private Idaho”</a></li>
					<span class="author">by Some Person</span> | 
					<time class="date">August 7, 2013</time>
				</ul>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
				<a class="solidbtn" href="#">Read More</a>
			</div>
			
			
			
		</div>
		
		<div class="divider"></div>
		
		<div class="pagination">
			<ul>
				<li><a href="#">Prev</a></li>
				<li><a class="active" href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">...</a></li>
				<li><a href="#">22</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>
		
		<div class="divider"></div>
		
		
		
		<div class="pagenavigation">
			<figure class="previous">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Contact Us</h2>
						<p>Go to previous page</p>
						<a href="contact.php"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Home</h2>
						<p>Go to next page</p>
						<a href="index.php"></a>
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