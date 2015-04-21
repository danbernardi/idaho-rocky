<?php

/**

* Post Data

*/



global $authordata;

$postcat = get_the_category();

$edit_post_link = get_edit_post_link();



?>

<h2 class="white margin10b"><a href="<?php the_permalink() ?>" class="white" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="chipboxg1 chiplisth1 margin10b font11">

  <ul>

    <?php foreach( $postcat as $obj ): ?>

    <li class="chipstyle3"><a href="<?php echo get_category_link($obj->term_id); ?>" class="white"><span><?php echo $obj->cat_name; ?></span></a></li>

    <?php endforeach; ?>

    <li><span><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_time('M j, Y') ?></a></span></li>            

    <li><a href="<?php echo get_author_posts_url($authordata->ID); ?>" class="lblue"><span><?php echo $authordata->display_name; ?></span></a></li>

    <li><a href="<?php echo get_comments_link($post->ID); ?>" class="lblue"><span><?php echo get_comments_number($post->ID); ?> Comments</span></a></li>

    <?php if( !empty( $edit_post_link ) ): ?>

    <li><a href="<?php echo $edit_post_link; ?>" class="lblue"><span>Edit</span></a></li>

    <?php endif; ?>

  </ul>

<br class="clear" />  

</div>

<div class="margin10b">

  <?php echo get_the_excerpt(); ?>

</div>