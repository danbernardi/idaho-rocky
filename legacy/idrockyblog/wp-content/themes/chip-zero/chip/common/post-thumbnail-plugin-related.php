<?php

/**

* Post Class Logic

*/



$post_class_array = get_post_class();

$post_class = '';

foreach( $post_class_array as $val ) {

	$post_class .= $val . " ";

}



?>

<div id="post-<?php the_ID(); ?>" class="chiprelatedposts <?php echo rtrim($post_class," "); ?>">

    

    <div class="chiprelatedpostsimg">

      <?php global $chip_zero_global; ?>

      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="img1"><img src="<?php echo $chip_zero_global['chip_image']['imageurl']; ?>" alt="<?php the_title_attribute(); ?>" width="150" height="150" class="attachment-thumbnail wp-post-image" /></a>

    </div>

    

    <div class="chiprelatedpoststitle">

      <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

    </div>

    

</div>