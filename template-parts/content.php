<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Soft Devindo
 */

$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'soft-archieve', true);
?>

<article id="post-<?php the_ID(); ?>">
					<div class="recent-entry">
						<h3 class="content-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<?php if( has_post_thumbnail() ){ ?>
						<img class="image-content" src="<?php echo esc_url( $image[0] ); ?>">
						<?php } ?>
						<p class="recent-entry-content">
							<?php the_excerpt(); ?>
							<!-- How to create Pie Chart Examples via ChartJS library with simple JS script. ... -->
						</p>
						<p class="published-date"><?php echo get_the_date() ?></p>
					</div>

</article>

