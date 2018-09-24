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
?>

<div class="container">
  <div class="row">
    <div class="col-sm-3  hidden-xs d-none d-sm-block">
      <?php get_sidebar(); ?>
    </div>
    <div id="primary" class="content-area col-sm-9">
      <main id="main" class="site-main">
      <h1><strong><?php single_cat_title(); ?></strong> Stories</h1>
      <?php
      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'category' );

      endwhile; // End of the loop.
      ?>

      </main><!-- #main -->
    </div><!-- #primary -->
  </div> <!-- .row -->
</div><!-- .container -->
<br style="clear:both;">
<?php
get_footer();



