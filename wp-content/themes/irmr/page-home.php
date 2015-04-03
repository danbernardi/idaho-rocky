<?php 
/*
Template Name: Home
*/
include('header.php'); ?>

<section class="home">
	<div class="home-slick">
	  
	  <?php
      function zd_image_gallery( $file_list_meta_key, $img_size = 'slideshow' ) {
										
        // Get the list of files
        $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

        // Loop through them and output an image
        foreach ( (array) $files as $attachment_id => $attachment_url ) {
          echo '<div>';
          echo '<div class="image-holder" style="background-image: url('.$attachment_url.');"></div>';
          echo '</div>';
        }
														
      }
		  echo zd_image_gallery( '_zd_home_slideshow', 'slideshow' );
		?>
	</div>
	<div class="row">
    <div class="cta-overlay">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
