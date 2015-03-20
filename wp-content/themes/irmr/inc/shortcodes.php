<?php

/* ------------------------------------------------
 * Home page shortcodes
 * ------------------------------------------------*/

// callout section
function sfhr_callout( $atts, $content = null ) {
	$output ='';
		
	extract( shortcode_atts( array(
		'columns' => '3',
	), $atts ) );
		
	$output .= '<div class="callout"><div class="row columns'.$columns.'">';
	$output .= do_shortcode($content);
	$output .= '</div></div>';
		
	return $output;
}
add_shortcode( 'callout', 'sfhr_callout' );
	
// callout section
function sfhr_col( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'link' => '#',
		'img' => '/img/home-search.jpg',
		'caption' => '',
		'icon' => '',
	), $atts ) );
		
	$output .= '<div class="column"><figure><a href="'.$link.'">';
	$output .= '<img src="'.$img.'">';
	$output .= '<figcaption><i class="fa '.$icon.'"></i>'.$caption.'</figcaption></a></figure></div>';
		
	return $output;
}
add_shortcode( 'col', 'sfhr_col' );



// parallax section
function sfhr_parallax_section( $atts, $content = null ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'img' => '/img/home-search.jpg',
	), $atts ) );
		
	$output .= '<div class="parallaxsection" style="background-image: url('.$img.')"><div class="welcome row">';
	$output .= do_shortcode($content);
	$output .= '</div></div>';
		
	return $output;
}
add_shortcode( 'parallax_section', 'sfhr_parallax_section' );

// box_title
function sfhr_box_title( $atts, $content = null ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'title' => '',
		'subtitle' => '',
		'link_text' => '',
		'link_url' => '',
	), $atts ) );
		
	$output .= '<div class="introtitle">';
	$output .= '<h3>'.$title.'</h3><h2>'.$subtitle.'</h2>';
	$output .= do_shortcode($content);
	$output .= '<a class="solidlink" href="'.$link_url.'">'.$link_text.'</a>';
	$output .= '</div>';
		
	return $output;
}
add_shortcode( 'box_title', 'sfhr_box_title' );

// reveal
function sfhr_reveal( $atts, $content = null ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'link_text' => '',
		'link_url' => '',
	), $atts ) );
		
	$output .= '<div class="reveal">';
	$output .= do_shortcode($content);
	$output .= '<a class="solidlink" href="'.$link_url.'">'.$link_text.'</a>';
	$output .= '</div>';
		
	return $output;
}
add_shortcode( 'reveal', 'sfhr_reveal' );
/*
<div class="parallaxsection" data-parallax="scroll" data-image-src="/img/slide03.jpg">
	<div class="welcome row">
		<div class="introtitle">
			<h1>San Francisco High Rises</h1>
			<h4>Welcome to San Francisco Highrises</h4>
			<p>Welcome to San Francisco Highrises</p>
		</div>
		<div class="reveal">
		<p>There are many complicated decisions involved in choosing your new home. To protect your interests and assure that you make the best possible decisions, it’s important that you have an agent on your side who is a seasoned professional in our local San Francisco real estate market.</p>
		<p>As your agent, my focus is on getting you the best possible home at the best possible price. I will work hard not only in finding you potential new homes to see, but also in keeping you informed of everything that takes place. As your agent and a top professional in the local market, I’ll negotiate the best prices and terms for you and answer all of your questions as they arise. I’ll be representing you, not the seller. This assures that my knowledge in the local market will be used in your best interests during the negotiation process.</p>
		</div>
	</div>
</div>
*/


/* ------------------------------------------------
 * General shortcodes
 * ------------------------------------------------*/
 
 // divider
function sfhr_divider( $atts ) {
	$output = '';
	$output .= '<div class="divider"></div>';
	return $output;
}
add_shortcode( 'divider', 'sfhr_divider' );

// googlemap
function sfhr_googlemap( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'url' => '',
	), $atts ) );
		
	$output .= '<div class="googlemap"><iframe src="'.$url.'" width="100%" height="300"></iframe></div>';
		
	return $output;
}
add_shortcode( 'googlemap', 'sfhr_googlemap' );

// icon
function sfhr_icon( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'class' => '',
	), $atts ) );
		
	$output .= '<i class="fa '.$class.' fa-fw"></i>';
		
	return $output;
}
add_shortcode( 'icon', 'sfhr_icon' );

// tabs

// tabs wrapper
function sfhr_tabs( $atts, $content = null ) {
	$output ='';
		
	$output .= '<div class="tabs">';
	$output .= do_shortcode($content);
	$output .= '</div>';
		
	return $output;
}
add_shortcode( 'tabs', 'sfhr_tabs' );

// tabsnav
function sfhr_tabsnav( $atts, $content = null ) {
	$output ='';
		
	$output .= '<ul class="tabsnav">';
	$output .= do_shortcode($content);
	$output .= '</ul>';
		
	return $output;
}
add_shortcode( 'tabsnav', 'sfhr_tabsnav' );

// tabsnav item
function sfhr_t_item( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'id' => '',
		'title' => '',
	), $atts ) );
		
	$output .= '<li><a href="#'.$id.'">'.$title.'</a></li>';
		
	return $output;
}
add_shortcode( 't_item', 'sfhr_t_item' );

// tab content
function sfhr_tab( $atts, $content = null ) {
	$output ='';
		
	extract( shortcode_atts( array(
		'id' => '',
	), $atts ) );
		
	$output .= '<div class="tab" id="'.$id.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';
		
	return $output;
}
add_shortcode( 'tab', 'sfhr_tab' );


// raw html
/*
       function my_formatter($content) {
       $new_content = '';
       $pattern_full = '{(\[raw\].*?\[/raw\])}is';
       $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
       $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

       foreach ($pieces as $piece) {
               if (preg_match($pattern_contents, $piece, $matches)) {
                       $new_content .= $matches[1];
               } else {
                       $new_content .= wptexturize(wpautop($piece));
               }
       }

       return $new_content;
}

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'my_formatter', 99);
*/

// team member

/* ------------------------------------------------
 * Team Members & Testimonials Shortcodes
 * ------------------------------------------------*/

// list team members
function sfhr_list_team_members( $atts ) {
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
            
				$job_title = get_post_meta( get_the_ID(), '_sfhr_job_title', true );
				$linkedin = get_post_meta( get_the_ID(), '_sfhr_linkedin', true );
				$twitter = get_post_meta( get_the_ID(), '_sfhr_twitter', true );
				$google_plus = get_post_meta( get_the_ID(), '_sfhr_google_plus', true );
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
add_shortcode( 'list_team', 'sfhr_list_team_members' );

// list testimonials
function sfhr_list_testimonials( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="team clearfix">
            <?php while ( $query->have_posts() ) : $query->the_post();
            
				$job_title = get_post_meta( get_the_ID(), '_sfhr_job_title', true );
				$linkedin = get_post_meta( get_the_ID(), '_sfhr_linkedin', true );
				$twitter = get_post_meta( get_the_ID(), '_sfhr_twitter', true );
				$google_plus = get_post_meta( get_the_ID(), '_sfhr_google_plus', true );
            ?>
            
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('testimonial'); ?>>
                <?php the_content(); ?>
                <h6 class="test-author">&ndash; <?php the_title(); ?></h6>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_testimonials', 'sfhr_list_testimonials' );


/* ------------------------------------------------
 * Neighborhoods Shortcodes
 * ------------------------------------------------*/

// neighborhoods grid
function sfhr_neighborhoods_grid( $atts, $content = null ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'columns' => '3',
	), $atts ) );
		
	$output .= '<div class="listings cols'.$columns.'">';
	$output .= do_shortcode($content);
	$output .= '</div>';
		
	return $output;
}
add_shortcode( 'neighborhoods_grid', 'sfhr_neighborhoods_grid' );


// individual neighborhoods
function sfhr_neighborhood( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'link' => '#',
		'img' => '/img/nb-standing.jpg',
		'title' => 'Enter a name',
	), $atts ) );
		
	$output .= '<div class="col"><a href="'.$link.'">';
	$output .= '<img src="'.$img.'" alt="'.$title.'">';
	$output .= '<h6>'.$title.'</h6>';
	$output .= '</a></div>';
		
	return $output;
}
add_shortcode( 'neighborhood', 'sfhr_neighborhood' );

// side navigation for neighborhoods post type
function sfhr_neighborhood_sidenav( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'neighborhood',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <ul class="menu">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'neighborhood_sidenav', 'sfhr_neighborhood_sidenav' );

// list neighborhoods
function sfhr_list_neighborhoods( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'neighborhood',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="listings cols3 clearfix">
            <h5 style="text-align: center">Select a Neighborhood Below</h5>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>
                <a href="<?php the_permalink(); ?>">
                	<?php if( has_post_thumbnail() ) {
                		echo the_post_thumbnail('b-thumb');
					} else { ?>
						<img src="/img/nb-standin.jpg">
					<?php } ?>
                	<h6><?php the_title(); ?></h6>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_neighborhoods', 'sfhr_list_neighborhoods' );


/* ------------------------------------------------
 * Buildings Shortcodes
 * ------------------------------------------------*/
 
// list buildings
function sfhr_list_buildings( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		'neighborhood' => '',
	), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'buildings',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array(
			array(
				'taxonomy' => 'neighborhood',
				'field'    => 'slug',
				'terms'    => $neighborhood,
			)
    	),
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="listings cols3 clearfix">
            <h5 style="text-align: center">Buildings</h5>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>
                <a href="<?php the_permalink(); ?>">
                	<?php if( has_post_thumbnail() ) {
                		echo the_post_thumbnail('b-thumb');
					} else { ?>
						<img src="/img/nb-standin.jpg">
					<?php } ?>
                	<h6><?php the_title(); ?></h6>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_buildings', 'sfhr_list_buildings' );

// list other buildings from same neighborhood as current post
function sfhr_building_sidenav( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		'neighborhood' => '',
	), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'buildings',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array(
			array(
				'taxonomy' => 'neighborhood',
				'field'    => 'slug',
				'terms'    => $neighborhood,
			)
    	),
    ) );
    if ( $query->have_posts() ) { ?>
        <ul class="menu">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'building_sidenav', 'sfhr_building_sidenav' );

// listing links
function sfhr_listings_cta( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'current_listing_link' => '#',
		'sold_listing_link' => '#',
	), $atts ) );
		
	$output .= '<div class="listings-cta">';
	$output .= '<a class="current" href="'.$current_listing_link.'">View Listings</a>';
	$output .= '<a class="sold" href="'.$sold_listing_link.'">View Recently Sold</a>';
	$output .= '</div>';
		
	return $output;
}
add_shortcode( 'listings_cta', 'sfhr_listings_cta' );


/* ------------------------------------------------
 * Sellers and Buyers Pages
 * ------------------------------------------------*/

// group steps
function sfhr_steps( $atts, $content = null ) {
	$output = '';
		
	$output .= '<ol class="steps">';
	$output .= do_shortcode($content);
	$output .= '</ol>';
		
	return $output;
}
add_shortcode( 'steps', 'sfhr_steps' );

// individual steps
function sfhr_step( $atts, $content = null ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'number' => '',
		'title' => '',
	), $atts ) );
		
	$output .= '<li><span>'.$number.'</span>';
	$output .= '<h5>'.$title.'</h5>';
	$output .= '<p>'.do_shortcode($content).'</p>';
	$output .= '</li>';
		
	return $output;
}
add_shortcode( 'step', 'sfhr_step' );


/* ------------------------------------------------
 * Contact Page
 * ------------------------------------------------*/

// contact info block
function sfhr_contact_info( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'name' => '',
		'address' => '',
		'location' => '',
		'phone' => '',
	), $atts ) );
		
	$output .= '<ul class="contactinfo">';
	$output .= '<li><strong>'.$name.'</strong></li>';
	$output .= '<li>'.$address.'</li>';
	$output .= '<li>'.$location.'</li>';
	$output .= '<li class="phone"><a href="'.$phone.'"><i class="fa fa-phone fa-fw"></i> '.$phone.'</a></li>';
	$output .= '</ul>';
		
	return $output;
}
add_shortcode( 'contact_info', 'sfhr_contact_info' );


/* ------------------------------------------------
 * Misc Functions
 * ------------------------------------------------*/
 
// buttons
function sfhr_button( $atts ) {
	$output = '';
		
	extract( shortcode_atts( array(
		'link' => '',
		'label' => '',
	), $atts ) );
		
	$output .= '<a class="btn" href="'.$link.'">'.$label.'</a>';
		
	return $output;
}
add_shortcode( 'button', 'sfhr_button' );

// disables automatic spacing & p tags inside selected shortcodes. Add shortcode name to array inside $block
function the_content_filter($content) {
	$block = join("|",array('callout', 'col', 'neighborhoods_grid', 'neighborhood', 'list_buildings', 'listings_cta', 'team_member', 'steps', 'step', 'contact_info', 'box_title', 'reveal'));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>