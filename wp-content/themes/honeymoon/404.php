<?php
/**
 * 404 page template
 *
 * @package wpv
 * @subpackage honeymoon
 */

get_header(); ?>

<div class="clearfix">
	<div id="header-404" style="background:url('http://amitandaastha.in/wp-content/uploads/2016/01/404error.png') no-repeat bottom right; height:600px;">
		<div class="line-1">404</div>
		<div class="line-2"><?php _e('Oooops!', 'honeymoon') ?></div>
		<div class="line-3"><?php _e('Page not found. It looks like someone took a bite of it.', 'honeymoon') ?></div>
		<div class="line-4"><?php printf(__('<a href="%s">&larr; Go to the home page</a>', 'honeymoon'), home_url()) ?></div>
	</div>
</div>

<?php get_footer(); ?>