<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">    

    

    <h2 class="white margin10b">Nothing Found</h2>

	<?php if( is_404() ): ?>

	<p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>

	<?php elseif( is_search() ): ?>

    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>

    <?php else: ?>

    <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>

    <?php endif; ?>

    

  </div>

</div>



<div class="chipboxm1 chipstyle1">

  <div class="chipboxm1data">    

    <?php get_search_form(); ?>

  </div>

</div>