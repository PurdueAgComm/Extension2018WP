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
    <div class="col-md-3 d-none d-md-block">
      <?php get_sidebar('sidenav'); ?>
      <?php get_sidebar('sidecontent'); ?>
    </div>
    <div id="primary" class="content-area col-md-9">
      <main id="main" class="site-main">
      <h1><?php single_cat_title(); ?></h1>
      <?php
      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'category' );

      endwhile; // End of the loop.
      ?>

      <?php
        if ( function_exists('wp_bootstrap_pagination') )
          wp_bootstrap_pagination();
      ?>

      </main><!-- #main -->
    </div><!-- #primary -->
  </div> <!-- .row -->
</div><!-- .container -->
<br style="clear:both;">
<?php
get_footer();



