<?php

global $chip_zero_global;

if( $chip_zero_global['theme_options']['chip_zero_logo'] == 1 ):

?>

<a href="<?php echo CHIP_ZERO_HOME; ?>"><img src="<?php echo $chip_zero_global['theme_options']['chip_zero_logo_url']; ?>" width="215" height="125" alt="" border="0" /></a>

<?php

else:

?>

<div class="textlogobox">

  <div class="blogname">

    <a href="<?php echo CHIP_ZERO_HOME; ?>" title="<?php bloginfo('name'); ?>" class="white"><?php bloginfo('name'); ?></a>

  </div>

  <div class="blogdesc">

    <?php bloginfo('description'); ?>

  </div>

</div>

<?php

endif;

?>