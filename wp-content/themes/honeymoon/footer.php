<?php
/**
 * Footer template
 *
 * @package wpv
 * @subpackage honeymoon
 */
?>

<?php if(!defined('WPV_NO_PAGE_CONTENT')): ?>
					</div> <!-- .limit-wrapper -->

				</div><!-- / #main (do not remove this comment) -->

			</div><!-- #main-content -->

			<?php if(!is_page_template('page-blank.php')): ?>
				<footer class="main-footer">
					<?php if(wpv_get_optionb('has-footer-sidebars')): ?>
						<div class="footer-sidebars-wrapper">
							<?php WpvTemplates::footer_sidebars(); ?>
						</div>
					<?php endif ?>
				</footer>

				<?php do_action('wpv_before_sub_footer') ?>

				<?php if(wpv_get_option('credits') != ''): ?>
					<div class="copyrights">
						<div class="<?php if(!wpv_get_option('full-width-header')) echo 'limit-wrapper' ?>">
							<div class="row">
								<?php echo do_shortcode(wpv_get_option( 'credits' )); ?>
							</div>
						</div>
					</div>
				<?php endif ?>
			<?php endif ?>

		</div><!-- / .pane-wrapper -->

<?php endif // WPV_NO_PAGE_CONTENT ?>
	</div><!-- / .boxed-layout -->
</div><!-- / #page -->

<div id="wpv-overlay-search">
	<form action="<?php echo home_url() ?>/" class="searchform" method="get" role="search" novalidate="">
		<input type="text" required="required" placeholder="<?php esc_attr_e('Search...', 'honeymoon') ?>" name="s" value="" />
		<button type="submit" class="icon theme"><?php wpv_icon('theme-search2') ?></button>
		<?php if(defined('ICL_LANGUAGE_CODE')): ?>
			<input type="hidden" name="lang" value="<?php echo ICL_LANGUAGE_CODE; ?>"/>
		<?php endif ?>
	</form>
</div>

<?php get_template_part('templates/side-buttons') ?>
<?php wp_footer(); ?>
<!-- W3TC-include-js-head -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzovuXqoor07NzZQOEJZBLRN3Qgq6fABs"></script>
<script type="text/javascript" src="http://amitandaastha.in/wp-content/themes/honeymoon/vamtam/assets/js/wedding-locations.js"></script>
</body>
</html>
