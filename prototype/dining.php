<?php include('header.php'); ?>

<section class="content">
	<aside>
		<div class="fixedscroll">
			<nav>
				<h5><a href="dining.php">Dining</a></h5>
				<ul>
					<li><a href="dining.php">Dining</a></li>
					<li><a href="#">Meet Our Chef</a></li>
					<li><a href="#">Sample Menus</a></li>
				</ul>
			</nav>
		</div>
	</aside>
	<article>
		<h2 class="pagetitle">Dining
		<a class="solidbtn red" href="#">Request a Reservation</a></h2>
		
		<p><strong>Dining at the Ranch is more than enjoyment of elegant meals:</strong> It’s an integral part of the Ranch Experience. <a href="#">Chef Jordan Boutry</a> strives to use local, organic, sustainable products whenever possible, making the items on our menu in-house of the highest quality fresh ingredients. Savor Jordan’s excellent cuisine, complemented by gracious service and a relaxed atmosphere, surrounded by the unparalleled beauty of the Sawtooth and White Cloud Mountains. Whether breakfast, country fine dining or an outdoor buffet, Jordan’s menus are innovative and elegant, yet refreshingly down to earth, incorporating fresh, local ingredients and creative seasonal specialties. Local meats, cheeses, fruits and vegetables intermingle with international and continental flavors to create a one-of-a-kind Idaho Rocky Mountain Ranch dining experience.</p>

		<p>Dining room seating provides intimate tables for 2 or larger tables where you have the opportunity to enjoy the camaraderie of other guests. There are local musicians at the ranch for your entertainment 4 nights a week during the dinner hour. Three nights a week, the dinner event is outdoors - a special Monday Dutch Oven Cook-Out, and Thursday and Saturday Barbeque Buffets. Our kitchen was fully updated and remodeled for the 2006 guest season.</p>

		<p>Breakfast, picnic lunches and dinner meals are included in <a href="lodging.php">lodging</a>.</p>
		
		<div class="divider"></div>
		<div id="slides">
			<img src="img/dining-slide05.jpg">
  			<img src="img/dining-slide03.jpg">
  			<img src="img/dining-slide04.jpg">
  			<img src="img/dining-slide01.jpg">
  		</div>
  		<div class="divider"></div>
  		
  		<div class="mealgrid">
  			
  			<div class="item">
  				<img src="img/mealgrid01.jpg">
  				<h3>Breakfast</h3>
				<p>Daily breakfast includes a complete continental buffet and our full hot breakfast menu. The buffet features fresh fruit, homemade granola and fresh-from-our-baker's-oven baked goods, juices, teas and fresh brewed coffee from Hailey Coffee Company. You then may choose from among our hot breakfast items, including a daily special, to complete your breakfast feast.</p>
  			</div>
  			
  			<div class="item">
  				<img src="img/mealgrid03.jpg">
  				<h3>Lunch</h3>
				<p>Your packed picnic lunch will be ready for you after breakfast, to take on your day’s adventure or to enjoy on the porch or at the Ranch picnic tables. Vegetarian options always are available, along with the ever reliable pb&amp;j.</p>
  			</div>
  			
  			<div class="item">
  				<img src="img/mealgrid02.jpg">
  				<h3>Dinner</h3>
				<p>Sunday, Tuesday, Wednesday, and Friday nights, dinners are multi-course delights, prepared by Chef Jordan. The meal is served Country fine dining style in the lodge from 6:30 until 8:30 pm. Children, if desired, may eat early from a simple children's menu these evenings; children’s menu options also are available if families choose to eat together.</p>
  			</div>
  			
  			<div class="item">
  				<img src="img/mealgrid04.jpg">
  				<h3>Dutch Oven Cook-Out</h3>
				<p>Monday evening you depart from the lodge in a horse-drawn wagon for a casual dinner in a meadow amidst the pines. Spectacular views of the Sawtooth Mountains, the soothing water of Gold Creek and the crooning of local musicians accompany your feast of Dutch oven dishes like roasted beef, lamb, and poultry, hearty Dutch oven stews, roasted vegetable dishes, Dutch oven corn bread and yeast biscuits, and delicious Dutch oven cobblers, crisps and bread puddings.</p>
  			</div>
  			
  			<div class="item">
  				<img src="img/mealgrid03.jpg">
  				<h3>IRMR Barbecue Nights</h3>
				<p>On Thursday and Saturday evenings, watch the last lingering rays of an Idaho day come to a close as you sit on the front porch and enjoy a delicious grilled BBQ buffet with all the fixin's while listening to local musicians. Saturday is our Fajita Grill and Thursday is our traditional western BBQ.</p>
  			</div>
  			
  			<div class="item">
  				<img src="img/mealgrid01.jpg">
  				<h3>Beverages &amp; Special Diets</h3>
				<p>A variety of fine wines, beers, and non-alcohol beer and sodas is available. There is a corkage fee for personal beverages brought to the porch and lodge dining room. Menu options for special diets are available with advance notice.</p>
  			</div>
  			
  		</div>

		<div class="divider"></div>
		
		<a class="solidbtn red" href="#">View Sample Menu</a>
		<a class="solidbtn red" href="#">Request a Reservation</a>
		
		<div class="divider"></div>
		
		<div class="pagenavigation">
			<figure class="previous">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Lodging</h2>
						<p>Go to previous page</p>
						<a href="lodging.php"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Meet Our Chef</h2>
						<p>Go to next page</p>
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
				interval: 7000,
				swap: true
			}
      });
    });
	
</script>