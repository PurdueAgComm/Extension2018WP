<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Results for %s', 'extension2018' ), '<em>' . get_search_query() . '</em>' );
							?>
						</h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'category' );

					endwhile;

        	wp_bootstrap_pagination();



				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>

<?php
get_footer();
