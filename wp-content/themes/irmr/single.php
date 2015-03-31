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
                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source="><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            
            <div class="divider"></div>
            
            <?php if( has_post_thumbnail() ) { ?>
              <img class="alignleft featuredimg" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
            <?php } ?>
            <?php the_content(); ?>
            <div class="divider"></div>
						<?php comments_template('comments.php'); ?>
						
						<div class="pagenavigation">
              <figure class="previous">
                <img src="/img/pagenavigation/prev.jpg" alt="Next Page" />
                <figcaption>
                  <div>
                    <h2>Previous Post</h2>
                    <p>Go to previous post</p>
                    <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>"></a>
                  </div>
                </figcaption>
              </figure>

              <figure class="next">
                <img src="/img/pagenavigation/next.jpg" alt="Next Page" />
                <figcaption>
                  <div>
                    <h2>Next Post</h2>
                    <p>Go to next post</p>
                    <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"></a>
                  </div>
                </figcaption>
              </figure>
            </div>
            
            <?php endwhile; ?>

				    <?php include('inline-footer.php'); ?>
				</article>
			</section>
	

<?php include('footer.php'); ?>