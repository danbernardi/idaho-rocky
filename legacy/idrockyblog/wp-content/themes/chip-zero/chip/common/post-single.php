<?php



global $chip_zero_global;



/*

|--------------------------

| Begin POST Loop

|--------------------------

*/



while (have_posts()) : the_post();



/*

|--------------------------

| POST Manipulation

|--------------------------

*/



global $authordata;

$postcat = get_the_category();

$edit_post_link = get_edit_post_link();



$post_class_array = get_post_class();

$post_class = '';

foreach( $post_class_array as $val ) {

	$post_class .= $val . " ";

}



?>



<div class="chipboxm1 chipstyle2 <?php echo rtrim($post_class," "); ?>">

  <div class="chipboxm1data">    

    <h2 class="white margin0 font22"><a href="<?php the_permalink() ?>" class="white" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>    

  </div>

</div>



<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">

    

    <div class="chipboxg1 chiplisth1 margin0">

      <ul>

        <li><span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_time('M j, Y') ?></a></span></li>            

        <li><a href="<?php echo get_author_posts_url($authordata->ID); ?>" class="lblue"><span><?php echo $authordata->display_name; ?></span></a></li>

        <li><a href="<?php echo get_comments_link($post->ID); ?>" class="lblue"><span><?php echo get_comments_number($post->ID); ?> Comments</span></a></li>

        <?php if( !empty( $edit_post_link ) ): ?>

    	<li><a href="<?php echo $edit_post_link; ?>" class="lblue"><span>Edit</span></a></li>

    	<?php endif; ?>

      </ul>

    <br class="clear" />  

    </div>

    

  </div>

</div>



<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">

    

    <?php 

	if( $chip_zero_global['theme_options']['chip_zero_sponsor_post_undertitle'] == 1 ):

	locate_template( array( CHIP_ZERO_FSROOT . 'sponsor/sponsor-post-undertitle.php' ), true, false );

	endif;

	?>

    

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



<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">

    <div><strong>Category:</strong> <?php the_category(', ') ?></div>    

  </div>

</div>



<?php if( is_array( get_the_tags() ) ): ?>

<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">

    <div><?php the_tags( "<strong>Tags:</strong> ", ", " ); ?></div> 

  </div>

</div>

<?php endif; ?>



<?php 

if( $chip_zero_global['theme_options']['chip_zero_sponsor_post_468x15'] == 1 ):

locate_template( array( CHIP_ZERO_FSROOT . 'sponsor/sponsor-468x15.php' ), true, false );

endif;

?>



<?php

if( $chip_zero_global['theme_options']['chip_zero_related_post'] == 1 ):

locate_template( array( CHIP_ZERO_FSROOT . 'common/post-related.php' ), true, false );

endif;

?>



<?php

if( $chip_zero_global['theme_options']['chip_zero_feedburner'] == 1 && $chip_zero_global['theme_options']['chip_zero_feedburner_post_bottom'] == 1 ):

locate_template( array( CHIP_ZERO_FSROOT . 'common/feedburner.php' ), true, false );

endif;

?>



<?php 

if( $chip_zero_global['theme_options']['chip_zero_authorbox'] == 1 ):

locate_template( array( CHIP_ZERO_FSROOT . 'common/authorbox.php' ), true, false );

endif;

?>



<div class="chipboxm1 chipstyle3">

  <div class="chipboxm1data">

    

    <?php comments_template(); ?>

      

  </div>

</div>



<?php

locate_template( array( CHIP_ZERO_FSROOT . 'common/pager-single.php' ), true, false );

endwhile;

?>