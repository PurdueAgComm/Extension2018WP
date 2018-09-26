<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package extension2018
 */

?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package extension2018
 */

$hasFeaturedImage = get_the_post_thumbnail_url();
?>

<div class="wide-container no-margin-auto" <?php if(!$hasFeaturedImage) : ?>style="border-top: .25rem solid #e5e5e5;" <?php endif; ?>>
  <div class="container">
  	<?php the_title( '<h1 class="story__title reveal">', '</h1>' ); ?>
  </div>
</div>

<div class="container">
	<article class="story__body" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'extension2018' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'extension2018' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>


