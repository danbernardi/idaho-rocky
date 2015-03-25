<?php include('header.php'); ?>

<section class="content">
  <aside>
		<div class="fixedscroll">
			<div class="widgetarea">
			  <?php dynamic_sidebar('blog'); ?>
			</div>
		</div>
	</aside>
  
  <article class="main">
		<h2 class="pagetitle"><?php the_title(); ?></h2>
						
		<div class="posts blog">
			<?php // Start the loop.
        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'postthumb', true);
          $thumb_url = $thumb_url_array[0]; 
      ?>
			
			<div class="item">
				<?php if ( has_post_thumbnail() ) { ?>
				  <img class="alignleft" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>"> 
				<?php } ?>
				<ul>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<span class="author">by <?php the_author(); ?></span> | 
					<time class="date"><?php the_date(); ?></time>
				</ul>
				<p><?php the_excerpt(); ?></p>
				<a class="solidbtn" href="<?php the_permalink(); ?>">Read More</a>
			</div>

		  <div class="divider"></div>
		
		<div class="pagination">
			<?php sfhr_numeric_posts_nav(); ?>
		</div>
		
		<div class="divider"></div>
		  <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
		</div>
		
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
						<a href="<?php echo $text_url; ?>"></a>
					</div>
				</figcaption>
			</figure>
		</div>
		
		<?php include('inline-footer.php'); ?>
  </article>
</section>
	
<?php include('footer.php'); ?>