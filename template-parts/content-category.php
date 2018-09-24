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


<div class="row" style="border-left: .25rem solid gold; margin-bottom: 1rem; padding: 1rem; background-color: #fcfcfc;">
  <?php if(has_post_thumbnail()) : ?>
    <div class="col-sm-5">
      <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    </div>
    <div class="col-sm-7">
  <?php else : ?>
    <div class="col-sm-12">
  <?php endif;?>
    <h2 style="margin:0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="text-muted" style="margin:0;"><em><?php the_time('l, F jS, Y'); ?></em></p>
    <?php the_excerpt(); ?>
    <?php echo "<a class='cta cta__tertiary' href='" . get_the_permalink() . "'>Read More</a>"; ?>
    </div> <!-- .col-7 OR .col-12 depending if there is an image -->
</div> <!-- .row -->




