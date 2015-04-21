<?php get_header(); ?>



<!-- Begin Content -->

<div id="content">

  <div id="contentdata">    

    

    <!-- Begin Content Left -->

    <div id="contentleft">

      <div id="contentleftdata">    

		

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