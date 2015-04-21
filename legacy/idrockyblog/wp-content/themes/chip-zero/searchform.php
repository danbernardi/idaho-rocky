<form method="get" class="searchform" action="<?php echo CHIP_ZERO_HOME; ?>" >

  <div>

    <label class="screen-reader-text" for="s">Search for:</label>

    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />

    <input type="submit" id="searchsubmit" value="Search" />

  </div>

</form>