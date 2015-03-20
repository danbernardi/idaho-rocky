<?php

/* ------------------------------------------------
 * Home page shortcodes
 * ------------------------------------------------*/


/* ------------------------------------------------
 * General shortcodes
 * ------------------------------------------------*/
 
 // divider
function zd_divider( $atts ) {
	$output = '';
	$output .= '<div class="divider"></div>';
	return $output;
}
add_shortcode( 'divider', 'zd_divider' );

// googlemap
function zd_googlemap( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'url' => '',
	), $atts ) );
		
	$output .= '<div class="googlemap"><iframe src="'.$url.'" width="100%" height="300"></iframe></div>';
		
	return $output;
}
add_shortcode( 'googlemap', 'zd_googlemap' );

// icon
function zd_icon( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );
		
	$output .= '<i class="fa '.$class.' fa-fw"></i>';
		
	return $output;
}
add_shortcode( 'icon', 'zd_icon' );


/* ------------------------------------------------
 * Team Members & Testimonials Shortcodes
 * ------------------------------------------------*/

// list press items
/*
function zd_list_team_members( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="team clearfix">
            <?php while ( $query->have_posts() ) : $query->the_post();
            
				$job_title = get_post_meta( get_the_ID(), '_zd_job_title', true );
				$linkedin = get_post_meta( get_the_ID(), '_zd_linkedin', true );
				$twitter = get_post_meta( get_the_ID(), '_zd_twitter', true );
				$google_plus = get_post_meta( get_the_ID(), '_zd_google_plus', true );
            ?>
            
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('teammember'); ?>>
                <?php if( has_post_thumbnail() ) {
                	echo the_post_thumbnail('team_member', array( 'class' => 'alignleft' ) );
				} ?>
                <ul class="social">
					<?php
						if(!strlen($linkedin) == 0) {
							echo '<li><a href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
						}
						if(!strlen($twitter) == 0) {
							echo '<li><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
						}
						if(!strlen($google_plus) == 0) {
							echo '<li><a href="'.$google_plus.'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
						}
					?>
				</ul>
                <h4><?php the_title(); ?></h4>
                <h6><?php echo $job_title; ?></h6>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_team', 'zd_list_team_members' );
*/


/* ------------------------------------------------
 * Misc Functions
 * ------------------------------------------------*/
 
// buttons
function zd_button( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'link' => '',
		'label' => '',
	), $atts ) );
		
	$output .= '<a class="btn" href="'.$link.'">'.$label.'</a>';
		
	return $output;
}
add_shortcode( 'button', 'zd_button' );

// disables automatic spacing & p tags inside selected shortcodes. Add shortcode name to array inside $block
function the_content_filter($content) {
	$block = join("|",array('callout', 'col', 'neighborhoods_grid', 'neighborhood', 'list_buildings', 'listings_cta', 'team_member', 'steps', 'step', 'contact_info', 'box_title', 'reveal'));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>