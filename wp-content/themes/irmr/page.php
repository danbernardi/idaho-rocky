<?php include('header.php'); ?>

<section class="content">
  <aside>
		<div class="fixedscroll">
			<div class="widgetarea">
			  <?php dynamic_sidebar('default'); ?>
			</div>
		</div>
	</aside>
  
  <article class="main">
    <?php 
      $hdg_btn = get_post_meta( get_the_ID(), '_zd_hdg_btn', true );
      $hdg_btn_text = get_post_meta( get_the_ID(), '_zd_hdg_btn_text', true ); 
      $hdg_btn_url = get_post_meta( get_the_ID(), '_zd_hdg_btn_url', true ); 
    
    ?>
		<h2 class="pagetitle">
		  <?php 
		    the_title();
		    if($hdg_btn == 'on') { echo '<a class="solidbtn red" href="'.$hdg_btn_url.'">'.$hdg_btn_text.'</a>'; }
		  ?>
    </h2>
						
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <?php the_content(); ?>
		    
		  <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
		
		<div class="pagenavigation">
			<?php
			  $prev_title = get_post_meta( get_the_ID(), '_zd_prev_title', true );
			  $prev_url = get_post_meta( get_the_ID(), '_zd_prev_url', true );
			  $next_title = get_post_meta( get_the_ID(), '_zd_next_title', true );
			  $next_url = get_post_meta( get_the_ID(), '_zd_next_url', true );
			?>
			
			<figure class="previous">
				<img src="/img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2><?php echo $prev_title; ?></h2>
						<p>Go to previous page</p>
						<a href="<?php echo $prev_url; ?>"></a>
					</div>
				</figcaption>
			</figure>
			
			<figure class="next">
				<img src="/img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
				<figcaption>
					<div>
						<h2><?php echo $next_title; ?></h2>
						<p>Go to next page</p>
						<a href="<?php echo $next_url; ?>"></a>
					</div>
				</figcaption>
			</figure>
		</div>
		
		<?php include('inline-footer.php'); ?>
  </article>
</section>
	
<?php include('footer.php'); ?>