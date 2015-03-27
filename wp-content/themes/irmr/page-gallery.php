<?php 
/*
Template Name: Gallery
*/
include('header.php'); ?>

<section class="gallery">
      
      <?php 
        $args = array( 
          'post_type' => 'gallery', 
          'posts_per_page' => 10,
          'orderby' => 'rand'
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          
          // retrieve custom field data
          $imgCaption = get_post_meta( get_the_ID(), '_zd_gal_caption', true ); 
          $imgWidth = get_post_meta( get_the_ID(), '_zd_gal_width', true );
          $imgHeight = get_post_meta( get_the_ID(), '_zd_gal_height', true );
          $imgSize = 'size-' . strval($imgWidth) . 'x' . strval($imgHeight);
          
          // get post thumbnail url
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, $imgSize, true);
          $thumb_url = $thumb_url_array[0];
        ?>
        
        <div class="gallery-item <?php echo $imgSize; ?>" style="background-image: url(<?php echo $thumb_url; ?>);">
          <figure>
          <figcaption><?php echo $imgCaption; ?></figcaption>
          </figure>
        </div>
        
        <?php /*
        <div>
			<figure>
				<figcaption>
					<span>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</span>
				</figcaption>
			</figure>
		</div>
        */ ?>
        
        <?php endwhile; ?>

</section>

<?php include('footer.php'); ?>
