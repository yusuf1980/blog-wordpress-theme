<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Soft Devindo
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

			if ( $prev_post ) {
				?>
				<a href="">
						<span class="navigation next-page">Next >></span>
					</a>
				<a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
					<span class="arrow" aria-hidden="true">&larr;</span>
					<span class="title"><span class="title-inner"><?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?></span></span>
				</a>

				<?php
			}

			if ( $next_post ) {
				?>

				<a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
					<span class="arrow" aria-hidden="true">&rarr;</span>
						<span class="title"><span class="title-inner"><?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?></span></span>
				</a>
				<?php
			}
			?>
}