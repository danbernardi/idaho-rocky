<footer>
  <?php
    $facebook = of_get_option( 'zd_facebook' );
    $linkedin = of_get_option( 'zd_linkedin' );
    $twitter = of_get_option( 'zd_twitter' );
    $googleplus = of_get_option( 'zd_googleplus' );
  ?>
  
  <div class="socialmedia">
    <ul>
      <?php 
        if(strlen($facebook) > 0) { 
          echo '<li><a href="'.$facebook.'" target="_blank"><i class="fa fa-facebook"></i></a></li>';
        };
        if(strlen($linkedin) > 0) { 
          echo '<li><a href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
        };
        if(strlen($twitter) > 0) { 
          echo '<li><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
        };
        if(strlen($googleplus) > 0) { 
          echo '<li><a href="'.$googleplus.'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
        };
      ?>
    </ul>
  </div>
  <nav>
    <?php wp_nav_menu( array('theme_location'  => 'footer') ); ?>
  </nav>
  <p class="copyright"><?php echo of_get_option( 'zd_copyright'); ?></p>
</footer>