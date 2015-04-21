<?php

/**

* Begin POST Loop

*/



while (have_posts()) : the_post();



?>



<div class="chipboxm1 chipstyle2 <?php echo rtrim($post_class," "); ?>">

  <div class="chipboxm1data">    

    <h2 class="white margin0 font22"><a href="<?php the_permalink() ?>" class="white" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    

  </div>

</div>



<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">

    

    <div class="chipoverride1">

	  <?php the_content(); ?>

      <br class="clear" />

    </div>

    

	<?php

    $wp_link_pages = wp_link_pages( array( 'echo' => 0 ) );

	if( !empty($wp_link_pages) ):

	?>

    <div class="wplinkpages"><?php echo $wp_link_pages; ?></div>    

    <?php endif; ?>

  

  </div>

</div>



<div class="chipboxm1 chipstyle3">

  <div class="chipboxm1data">

    

    <?php comments_template(); ?>

      

  </div>

</div>



<?php

endwhile;

?>