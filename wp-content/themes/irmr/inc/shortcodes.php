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


// overview
function zd_overview( $atts, $content = null ) {
	$output = '';
		
	$output .= '<div class="overview">';
  $output .= do_shortcode($content);
  $output .= '</div>';
		
	return $output;
}
add_shortcode( 'overview', 'zd_overview' );

// overview page
function zd_overview_page( $atts, $content = null ) {
	$output = '';
		
  extract( shortcode_atts( array(
    'img'   => '',
    'title' => '',
    'link'  => '',
	), $atts ) );
		
	$output .= '<div class="overviewpage"><figure>';
  $output .= '<img src="'.$img.'" alt="'.$title.'">';
  $output .= '<figcaption><div>';
  $output .= '<h2>'.$title.'</h2>';
  $output .= '<p>'.$content.'</p>';
  $output .= '<a href="'.$link.'"></a>';
  $output .= '</div></figcaption></figure></div>';
		
	return $output;
}
add_shortcode( 'overview_page', 'zd_overview_page' );


// posts wrapper
function zd_posts( $atts, $content = null ) {
	$output = '';
		
	$output .= '<div class="posts">';
  $output .= do_shortcode($content);
  $output .= '</div>';
		
	return $output;
}
add_shortcode( 'posts', 'zd_posts' );

/*
[overview]
[overview_page img="" title="" link=""][/overview_page]
[/overview]
<div class="overview">
			
			<div class="overviewpage">
				<figure>
					<img src="img/overview-theranchexperience.jpg" alt="Next Page" />
					<figcaption>
						<div>
							<h2>The Ranch <span>Experience</span></h2>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam pellentesque.</p>
							<a href="the-experience-the-ranch-experience.php"></a>
						</div>
					</figcaption>
				</figure>
			</div>
*/


/* ------------------------------------------------
 * Team Members & Testimonials Shortcodes
 * ------------------------------------------------*/

// list press items
function zd_list_press( $atts ) {
    
    extract( shortcode_atts( array(
      'logo' => '',
      'publication' => '',
    ), $atts ) );
    
    $publication_id = preg_replace("/[^a-z0-9\-]+/i", "-", $publication);
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'press',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array(
          array(
            'taxonomy' => 'publications',
            'field'    => 'slug',
            'terms'    => $publication_id,
          )
        ),
    ) );
    
    if ( $query->have_posts() ) { ?>
        <div class="item">
            <img src="<?php echo $logo; ?>">
            <?php while ( $query->have_posts() ) : $query->the_post();
              $author = get_post_meta( get_the_ID(), '_zd_press_author', true );
              $pubdate = get_post_meta( get_the_ID(), '_zd_press_pubdate', true );
            ?>
            <div class="divider"></div>
            <div id="press-<?php the_ID(); ?>" <?php post_class(); ?>>
              <a href="<?php the_permalink(); ?>">&ldquo;<?php the_title(); ?>&rdquo;</a>
              <span class="author">by <?php echo $author; ?></span> | 
              <span class="media"><?php echo $publication; ?></span> | 
              <time class="date"><?php echo $pubdate; ?></time>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_press', 'zd_list_press' );


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
	$block = join("|",array('overview', 'overview_page', 'list_press', 'posts'));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>