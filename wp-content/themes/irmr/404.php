<?php 
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage irmr
 * @since irmr 1.0
 */
include('header.php'); ?>
  <section class="error-404 not-found">
    <div class="row">
      <div class="four-oh-four">404</div>
      <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>

      <div class="page-content">
        <p><?php _e( 'It looks like nothing was found at this location.', 'twentyfifteen' ); ?></p>
        <a href="/">Return to Homepage</a>
      </div><!-- .page-content -->
		</div>
  </section><!-- .error-404 -->
	

<?php include('footer.php'); ?>