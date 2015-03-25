<?php include('header.php'); ?>

	<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'pagetitle', true);
		$thumb_url = $thumb_url_array[0];
	?>
				
				<section class="content">
        <aside>
          <div class="fixedscroll">
            <div class="widgetarea">
              <?php dynamic_sidebar('blog'); ?>
            </div>
          </div>
        </aside>
        <article class="main">
		      <?php
							// the loop
							while ( have_posts() ) : the_post(); 
						?>
						
						<h2 class="pagetitle"><?php the_title(); ?></h2>
            <span class="author">by <?php the_author(); ?></span> | 
            <time class="date"><?php the_date(); ?></time>
            <div class="socialshare">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            
            <div class="divider"></div>
            
            <?php if( has_post_thumbnail() ) { ?>
              <img class="alignleft featuredimg" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
            <?php } ?>
            <?php the_content(); ?>
            <div class="divider"></div>
						<?php comments_template('comments.php'); ?>

						<?php endwhile; ?>
						
						<div class="pagenavigation">
              <?php
                $prev_title = get_post_meta( get_the_ID(), '_zd_prev_title', true );
                $prev_url = get_post_meta( get_the_ID(), '_zd_prev_url', true );
                $next_title = get_post_meta( get_the_ID(), '_zd_next_title', true );
                $next_url = get_post_meta( get_the_ID(), '_zd_next_url', true );
              ?>

              <figure class="previous">
                <img src="/img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
                <figcaption>
                  <div>
                    <h2><?php echo $prev_title; ?></h2>
                    <p>Go to previous page</p>
                    <a href="<?php echo $prev_url; ?>"></a>
                  </div>
                </figcaption>
              </figure>

              <figure class="next">
                <img src="/img/pagenavigation/adayinthelife-feat.jpg" alt="Next Page" />
                <figcaption>
                  <div>
                    <h2><?php echo $next_title; ?></h2>
                    <p>Go to next page</p>
                    <a href="<?php echo $next_url; ?>"></a>
                  </div>
                </figcaption>
              </figure>
            </div>

				    <?php include('inline-footer.php'); ?>
				</article>
			</section>
	

<?php include('footer.php'); ?>