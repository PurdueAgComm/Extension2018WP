<div class="row">
  <div class="col-md-12">
    <form class="form__search form__search" style="width: 100%;" role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
            <input class="form__search-input" placeholder="Search <?php echo bloginfo(); ?>" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <input type="image" id="searchsubmit" value="Search" src="https://extension.purdue.edu/assets/images/icon--search.svg" class="form__search-submit" alt="Search">
      </form>
    </form>
  </div>
</div>
<br>