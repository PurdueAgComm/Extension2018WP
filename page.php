<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
        <source srcset="<?php echo get_the_post_thumbnail_url(null, "full"); ?>" media="(min-width: 992px)">
        <source srcset="<?php echo get_the_post_thumbnail_url(null, "large"); ?>" media="(min-width: 576px)">
        <img srcset="<?php echo get_the_post_thumbnail_url(null, "medium_large"); ?>" alt="<?php the_title();?>">
      </picture>
    </div>
  </div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-3  hidden-xs d-none d-sm-block">
			<?php get_sidebar(); ?>
		</div>
		<div id="primary" class="content-area col-sm-9">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div> <!-- .row -->
</div><!-- .container -->
<br style="clear:both;">
<?php
get_footer();
