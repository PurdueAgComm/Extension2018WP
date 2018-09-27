<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package extension2018
 */

?>

	</div><!-- #content -->

	<br style="clear:both;"><br style="clear:both;"><br style="clear:both;">
	<br style="clear:both;"><br style="clear:both;"><br style="clear:both;">
	<div class="wide-container">
	  <footer class="footer edge edge--top--reverse">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-10 col-sm-8 col-12">
	          <p>&copy; 2018 Purdue University | <a href="http://www.purdue.edu/purdue/disclaimer.html">An equal access, equal opportunity university</a></p>

	          <?php if(get_theme_mod( 'extension2018_custom_address' )) :
	          	echo "<p>" . get_theme_mod( 'extension2018_custom_address' ) . "</p>";
	          else : ?>
	          	<p>615 West State Street, West Lafayette, IN 47907-2053</p>
	         	<?php endif; ?>
	          <p>If you have trouble accessing this page because of a disability, please email us at <a href="mailto:extension@purdue.edu?subject=ADA Request">extension@purdue.edu</a></p>
	        </div>
	        <div class="col-md-2 col-sm-4 col-6 offset-sm-0 offset-3 ">
	          <a href="https://purdue.edu"><img src="https://www.purdue.edu/purdue/images/logo.png" alt="Purdue University"></a>
	        </div>
	      </div>
	    </div>
	  </footer>
	</div>


  <!-- SCRIPTS -->
  <script src="https://extension.purdue.edu/_compiled/vendor.js" async></script>
  <script src="https://extension.purdue.edu/_compiled/app.js" async></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>
