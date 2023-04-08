<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftDewindo
 * @since Soft Devindo 1.0
 */
?>
<!-- <article id="post-<?php the_ID(); ?>"> -->
	<div class="recent-entry">
		<h2 class="content-title">
			<?php the_title(); ?>
		</h2>
						
		<p class="recent-entry-content">

			<?php the_content(); 

			wp_link_pages( array(
			    'before'            => '<div class="desc-nav">'.esc_html__( 'Pages:', 'softdevindo' ),
			    'after'             => '</div>',
			    'link_before'       => '<span>',
			    'link_after'        => '</span>'
		    ) );
							?>
							<!-- <?php the_excerpt(); ?> -->
							<!-- How to create Pie Chart Examples via ChartJS library with simple JS script. ... -->
		</p>

		<p>
			<?php the_tags( 'Tag: <span class="detail_tag">', '</span><span class="detail_tag">', ' </span> ' ); ?>
		</p>
	</div>

<!-- </article> -->