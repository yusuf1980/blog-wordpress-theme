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

get_header();
?>	

		<div class="tutorial-content">
			<div id="belajar-content">
				<div class="recent-posts">
					<?php
					while ( have_posts() ) : the_post();

							//get_template_part( 'template-parts/content', 'single' );
							get_template_part( 'template-parts/single', get_post_type() );

							// If comments are open or we have at least one comment, load up the comment template.
							/*if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;*/

					endwhile; 


					?>
				</div>

				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			</div>
		</div>

		<?php get_sidebar(); ?>
		
	</div>


<?php
get_footer();