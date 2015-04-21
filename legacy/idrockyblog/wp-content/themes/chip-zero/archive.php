<?php get_header(); ?>



<!-- Begin Content -->

<div id="content">

  <div id="contentdata">    

    

    <!-- Begin Content Left -->

    <div id="contentleft">

      <div id="contentleftdata">    

		

		<div class="chipboxm1 chipstyle2">

          <div class="chipboxm1data">    

            <h2 class="white margin0 font22">

            <?php if ( is_day() ): ?>

            Daily Archives: <?php echo get_the_date(); ?>

            <?php elseif ( is_month() ): ?>

            Monthly Archives: <?php echo get_the_date('F Y'); ?>

            <?php elseif ( is_year() ) : ?>

            Yearly Archives: <?php echo get_the_date('Y'); ?>

            <?php else: ?>

            Blog Archives

            <?php endif; ?>

            </h2>    

          </div>

        </div>		

		

		<?php

        locate_template( array( CHIP_ZERO_FSROOT . 'common/post-loop.php' ), true, false );

		locate_template( array( CHIP_ZERO_FSROOT . 'common/pager.php' ), true, false );

		?>

      

      </div>

    </div>

    <!-- End Content Left -->

    

    <!-- Begin Sidebar -->

    <?php get_sidebar(); ?>

    <!-- End Sidebar -->        

        

    <br class="clear" />    

  

  </div>  

</div>

<!-- End Content -->



<?php get_footer(); ?>   