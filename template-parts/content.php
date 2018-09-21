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

<div class="wide-container no-margin-auto story__title--wide--background" <?php if(!$hasFeaturedImage) : ?>style="border-top: .25rem solid #e5e5e5;" <?php endif; ?>>
  <div class="container story__title--background">
  	<?php the_title( '<h1 class="story__title">', '</h1>' ); ?>
    <h1 class="story__title reveal"><?php echo $article->strTitle; ?></h1>
  </div>
</div>

<div class="container">
  <div class="story__meta reveal-meta" data-toggle="tooltip" data-placement="bottom" title="<?php echo $article->strAuthorTitle;?>">
    <i class="fas fa-user" data-toggle="tooltip" title="Author"></i> <?php echo get_the_author($post) ?>
  </div>

  <div class="story__meta reveal-meta">
    <i class="fas fa-calendar" data-toggle="tooltip" data-placement="bottom" title="Date Modified"></i> <?php echo get_the_date() ?>
  </div>

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


    <footer class="entry-footer">
      <?php if(has_category() || has_tag()) : ?>
        <div class="blog-meta">
          <?php if(has_category()) : ?>
            <i class="fas fa-folder-open" title="category"></i> <?php the_category(', '); ?> <br>
          <?php endif; ?>
          <?php if(has_tag()) : ?>
            <i class="fas fa-tags"></i> <?php the_tags(''); ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <br>
      <nav id="nav-single">
        <h3 class="sr-only"><?php _e( 'Read more', 'purduetwentyfourteen' ); ?></h3>
        <div class="pull-left"><?php previous_post_link( '%link', __( '<i class="fa fa-arrow-circle-left"></i> Previous Story', 'extension2018' ) ); ?></div>
        <div class="pull-right"><?php next_post_link( '%link', __( 'Next Story <i class="fa fa-arrow-circle-right"></i>', 'extension2018' ) ); ?></div>
      </nav>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
