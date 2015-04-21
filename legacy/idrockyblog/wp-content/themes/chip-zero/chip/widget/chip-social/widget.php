<?php global $chip_zero_global; ?>

<div>

  

  <?php if( $chip_zero_global['theme_options']['chip_zero_rss'] == 1 ): ?>

  <a href="<?php echo $chip_zero_global['theme_options']['chip_zero_rss_url']; ?>"><img src="<?php echo CHIP_ZERO_URLPATH; ?>images/rss.png" width="32" height="32" alt="<?php echo $chip_zero_global['theme_options']['chip_zero_rss_url']; ?>" /></a>

  <?php endif; ?>

  

  <?php if( $chip_zero_global['theme_options']['chip_zero_delicious'] == 1 ): ?>

  <a href="<?php echo $chip_zero_global['theme_options']['chip_zero_delicious_url']; ?>"><img src="<?php echo CHIP_ZERO_URLPATH; ?>images/delicious.png" width="32" height="32" alt="<?php echo $chip_zero_global['theme_options']['chip_zero_delicious_url']; ?>" /></a>

  <?php endif; ?>

  

  <?php if( $chip_zero_global['theme_options']['chip_zero_facebook'] == 1 ): ?>

  <a href="<?php echo $chip_zero_global['theme_options']['chip_zero_facebook_url']; ?>"><img src="<?php echo CHIP_ZERO_URLPATH; ?>images/facebook.png" width="32" height="32" alt="<?php echo $chip_zero_global['theme_options']['chip_zero_facebook_url']; ?>" /></a>

  <?php endif; ?>

  

  <?php if( $chip_zero_global['theme_options']['chip_zero_stumble'] == 1 ): ?>

  <a href="<?php echo $chip_zero_global['theme_options']['chip_zero_stumble_url']; ?>"><img src="<?php echo CHIP_ZERO_URLPATH; ?>images/stumbleupon.png" width="32" height="32" alt="<?php echo $chip_zero_global['theme_options']['chip_zero_stumble_url']; ?>" /></a>

  <?php endif; ?>

  

  <?php if( $chip_zero_global['theme_options']['chip_zero_digg'] == 1 ): ?>

  <a href="<?php echo $chip_zero_global['theme_options']['chip_zero_digg_url']; ?>"><img src="<?php echo CHIP_ZERO_URLPATH; ?>images/digg.png" width="32" height="32" alt="<?php echo $chip_zero_global['theme_options']['chip_zero_digg_url']; ?>" /></a>

  <?php endif; ?>

  

  <?php if( $chip_zero_global['theme_options']['chip_zero_twitter'] == 1 ): ?>

  <a href="<?php echo $chip_zero_global['theme_options']['chip_zero_twitter_url']; ?>"><img src="<?php echo CHIP_ZERO_URLPATH; ?>images/twitter.png" width="32" height="32" alt="<?php echo $chip_zero_global['theme_options']['chip_zero_twitter_url']; ?>" /></a>

  <?php endif; ?>

  

</div>