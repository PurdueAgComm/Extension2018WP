<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package extension2018
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <title><?php echo bloginfo(); ?> | Purdue Extension</title>
  <meta name="description" content="See how Purdue Extension connects Indiana to Purdue University research and programs in agriculture, communities, families, health, and youth development." />
  <!-- Twitter Card data -->
  <meta name="twitter:card" value="summary">
  <!-- Open Graph data -->
  <meta property="og:title" content="<?php echo bloginfo(); ?>" />
  <meta property="og:url" content="<?php echo site_url(); ?>" />
  <meta property="og:image" content="https://extension.purdue.edu/annualreport/images/cover.jpg" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
    <header class="header">
      <!-- TODO: svg of logo -->
      <a href="/"><img src="https://extension.purdue.edu/assets/images/logo.svg" alt="Purdue Extension - Purdue University" class="header__logo" /></a>
      <form action="results/" method="get" class="form__search form__search--header">
        <input type="search" name="q" class="form__search-input" placeholder="Search Purdue Extension" aria-label="Search" aria-placeholder="Search people, articles, and more" />
        <input type="image" value="Search" src="https://extension.purdue.edu/assets/images/icon--search.svg" class="form__search-submit" alt="Search">
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <p class="navbar-toggler__menu">Menu</p>
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
  </div>
  <div class="wide-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<?php
			/*
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			*/
			?>
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="/">Home</a>
            <a class="nav-item nav-link" href="/about">About</a>
            <a class="nav-item nav-link" href="/category/1">Agriculture</a>
            <a class="nav-item nav-link" href="/category/2">Community</a>
            <a class="nav-item nav-link" href="/category/3">Environment</a>
            <a class="nav-item nav-link" href="/category/4">Family</a>
            <a class="nav-item nav-link" href="/category/5">Food</a>
            <a class="nav-item nav-link" href="/category/6">Garden</a>
            <a class="nav-item nav-link" href="/category/7">Youth</a>
            <!-- <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
            <form action="/results/" method="get" class="form__search form__search--mobile-nav">
              <input type="search" name="q" class="form__search-input" placeholder="Search Purdue Extension" aria-label="Search" aria-placeholder="Search people, articles, and more" />
              <input type="image" value="Search" src="https://extension.purdue.edu/assets/images/icon--search.svg" class="form__search-submit" alt="Search">
            </form>
          </div>
        </div>
      </div>
    </nav>
  </div>

	<div id="content" class="site-content">
