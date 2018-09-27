<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package extension2018
 */

get_header();

$hasFeaturedImage = get_the_post_thumbnail_url();

?>

<?php if($hasFeaturedImage) : ?>
<div class="wide-container">
  <div class="hero">
    <picture class="hero__banner">
      <source srcset="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" media="(min-width: 1200px)">
      <source srcset="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" media="(min-width: 992px)">
      <source srcset="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" media="(min-width: 576px)">
      <img srcset="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php the_title();?>">
    </picture>
  </div>
</div>
<?php endif; ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );


		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
