<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftDewindo
 * @since Soft Devindo 1.0
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body>

		<div id="site_header">
			<div class="content">
				<?php if ( has_custom_logo() ) : ?>
					<div class="logo"><?php the_custom_logo(); ?></div>
				<?php endif; ?>
				<!-- <a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/yusuv-logo.png" alt="">
				</a> -->
				<div class="search-container">
					<?php get_search_form(); ?>
					<!-- <form action="/" class="search-form">
						<input type="text" class="search" title="Search Yusuv.com" autocomplete="off" placeholder="Cari artikel">
					</form> -->
				</div>
				<div class="header-url-container">
					<div class="sub-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'main-menu',
							'depth'          => 1,
							) );
						?>
						<div id="toggle-menu"></div>
					</div>
				</div>
			</div>
		</div>

	<div class="content content-post">
		<div id="menuBackdrop" class="hidden"></div>
		<div id="left-sidebar-menu" class="left-sidebar-menu">
			<ul class="category-menu">
					<?php
						// get_header('menu');

						wp_nav_menu( array(
							'theme_location' => 'category-menu',
							'menu_id'        => 'category-menu',
							'depth'          => 3,
							'link_after'	 => '<i class="icon-right">
								<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
							</i>'
							) );
						?>


					<!-- <li class="cat-item">
						<a href="">
							PHP
							<i class="icon-right">
								<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
							</i>
						</a>
					</li> -->
			</ul>
		</div>
