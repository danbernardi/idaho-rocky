<?php get_header(); ?>



<!-- Begin Content -->

<div id="content">

  <div id="contentdata">    

    

    <!-- Begin Content Left -->

    <div id="contentleft">

      <div id="contentleftdata">    

		

		<div class="chipboxm1 chipstyle2">

          <div class="chipboxm1data">    

            <h2 class="white margin0 font22">Tag Archives: <?php echo single_tag_title( '', false ); ?></h2>    

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