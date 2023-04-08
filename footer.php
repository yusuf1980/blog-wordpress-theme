
<?php
/**
 *
 *
 * @package SoftDewindo
 * @since Soft Devindo 1.0
 */

?>

	<footer class="footer">
		<div class="content">
			<div class="footer-content">
				© 2022 TipsKoding.com
			</div>
			<div class="menu-footer">
				<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-footer',
							'menu_id'        => 'menu-footer',
							'depth'          => 1,
							'before'		 => '- ',
							) );
						?>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>

	</body>
</html>