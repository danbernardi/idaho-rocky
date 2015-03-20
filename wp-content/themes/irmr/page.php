<?php include('header.php'); ?>

	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'pagetitle', true);
			$thumb_url = $thumb_url_array[0];
	?>
				
		
				<?php $disableSidebar = get_post_meta( get_the_ID(), '_cmb2_disable_sidebar', true ); ?>
				<div data-parallax="scroll" <?php if( has_post_thumbnail() ) { echo 'data-image-src="'.$thumb_url.'"'; } else { echo 'data-image-src="/img/slide03.jpg"'; } ?> class="pagetitle">
					<div class="loader"><i class="fa fa-spinner fa-pulse"></i></div>
					<div class="row"><h1><?php the_title(); ?></h1></div>
				</div>
				<section class="content row <?php if( !$disableSidebar == 'on' ) { echo 'withSidebar'; } ?>">
					<article class="contentbox">
						
						
						<?php
// Grab the metadata from the database


// Echo the metadata

?>
						
						<?php if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<div class="breadcrumbs">','</div>');
						} ?>
						
						<?php 
							// Include the page content template.
							the_content();

							endwhile; 
						?>
				</article>

				<?php if( !$disableSidebar == 'on' ) { ?>
				
					<aside>
						<?php dynamic_sidebar( 'nav_sidebar' ); ?>
						<?php dynamic_sidebar( 'default_sidebar' ); ?>
					</aside>
				
				<?php } ?>
				
			</section>
	

<?php include('footer.php'); ?>