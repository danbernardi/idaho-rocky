<?php include('header.php'); ?>

<section class="content">
  <aside>
		<div class="fixedscroll">
			<div class="widgetarea">
			  <?php dynamic_sidebar('default'); ?>
			</div>
		</div>
	</aside>
  
  <article>
		<h2 class="pagetitle"><?php the_title(); ?></h2>
						
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <?php the_content(); ?>
		    
		  <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
		
		<div class="pagenavigation">
			<figure class="previous">
				<img src="/img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>Home</h2>
						<p>Go to previous page</p>
						<a href="index.php"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="/img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2>The Ranch Experience</h2>
						<p>Go to next page</p>
						<a href="the-experience-the-ranch-experience.php"></a>
					</div>
				</figcaption>
			</figure>
		</div>
		
		<footer>
      <p class="copyright">© 2014 Idaho Rocky Mountain Ranch. All rights reserved.</p>
      <div class="socialmedia">
        <ul>
          <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <nav>
        <?php wp_nav_menu( array('theme_location'  => 'footer') ); ?>
      </nav>
    </footer>
  </article>
</section>
	
<?php include('footer.php'); ?>