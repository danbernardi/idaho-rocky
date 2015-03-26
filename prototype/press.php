<?php include('header.php'); ?>

<section class="content">
	<aside>
		<div class="fixedscroll">
			<nav class="recentposts">
				<h5><a href="#">Recently Added Articles</a></h5>
				<ul>
					<li><a href="dining.php">Your Own Private Idaho<br><span>New York Times</span></a></li>
					<li><a href="#">Sawtooth Mountains: The hidden Rockies<br><span>Sunset</span></a></li>
					<li><a href="#">Article by the Seattle Times<br><span>Seattle Times</span></a></li>
					<li><a href="#">Another Article Title<br><span>Idaho Statesmen</span></a></li>
					<li><a href="#">Yet Another Article<br><span>Washington Post</span></a></li>
				</ul>
			</nav>
		</div>
	</aside>
	<article>
		<h2 class="pagetitle">Press Articles</h2>
		
		<p><strong>Donec id elit non mi porta gravida at eget metus.</strong> Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis.</p>
		
		<div class="divider"></div>
		<div class="posts">
			
			<div class="item">
				<img src="img/press/newyorktimes.jpg" alt="New York Times">
				<div class="divider"></div>
				<div class="article">
					<a href="#">“Your Own Private Idaho”</a>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">New York Times</span> | 
					<time class="date">August 7, 2013</time>
				</div>
				
				<div class="divider"></div>
				
				<ul>
					<li><a href="#">“Article by the New York Times”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">New York Times</span> | 
					<time class="date">August 7, 2013</time>
				</ul>
			</div>
			
			<div class="item">
				<img src="img/press/sunset.jpg" alt="Sunset">
				<div class="divider"></div>
				<ul>
					<li><a href="#">“Sawtooth Mountains: The hidden Rockies”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">Sunset</span> | 
					<time class="date">June 2010</time>
				</ul>
				
				<div class="divider"></div>
				
				<ul>
					<li><a href="#">“Article by Sunset”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">Sunset</span> | 
					<time class="date">June 2010</time>
				</ul>
			</div>
			
			<div class="item">
				<img src="img/press/seattletimes.jpg" alt="Seattle Times">
				<div class="divider"></div>
				<ul>
					<li><a href="#">“Article by the Seattle Times”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">Seattle Times</span> | 
					<time class="date">June 2010</time>
				</ul>
			</div>
			
			<div class="item">
				<img src="img/press/idahostatesmen.jpg" alt="Idaho Statesmen">
				<div class="divider"></div>
				<ul>
					<li><a href="#">“Article by the Idaho Statesmen”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">Idaho Statesmen</span> | 
					<time class="date">June 2010</time>
				</ul>
			</div>
			
			<div class="item">
				<img src="img/press/latimes.jpg" alt="Los Angeles Times">
				<div class="divider"></div>
				<ul>
					<li><a href="#">“Article by the Los Angeles Times”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">Los Angeles Times</span> | 
					<time class="date">June 2010</time>
				</ul>
			</div>
			
			<div class="item">
				<img src="img/press/washingtonpost.jpg" alt="Washington Post">
				<div class="divider"></div>
				<ul>
					<li><a href="#">“Article by the Washington Post”</a></li>
					<span class="author">by Rachel Levin</span> | 
					<span class="media">Washington Post</span> | 
					<time class="date">June 2010</time>
				</ul>
			</div>
			
		</div>
		<div class="divider"></div>
		
		
		
		<div class="pagenavigation">
			<figure class="previous">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Dining</h2>
						<p>Go to previous page</p>
						<a href="dining.php"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Private Events</h2>
						<p>Go to next page</p>
						<a href="private-parties.php"></a>
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