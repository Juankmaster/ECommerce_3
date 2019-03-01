<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 // * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="http://localhost/ShUrRe_2/wp-content/themes/shurre/css/materialize.min.css"  media="screen,projection"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <link type="text/css" rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>"  media="screen,projection"/>    

	<?php wp_head(); ?>
</head>

<body >

<!-- <div id="page" class="site"> -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shurre' ); ?></a> -->

	<header id="masthead" class="site-header">
		
	<div id="content" class="site-content">
		<!-- Menu Principal -->	
    	<div class="navbar-fixed">
    	 	 <nav >
			    <div class="nav-wrapper container">
			      <a href="#" class="brand-logo"></a>
			      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

			      <!-- <ul id="nav-mobile" class="left hide-on-med-and-down">
			        <li><a href="sass.html"><i class="material-icons left">local_dining</i>Platos</a></li>
			        <li><a href="badges.html"><i class="material-icons left">label_outline</i>Ocasiones</a></li>
			        <li><a href="collapsible.html"><i class="material-icons left">place</i>Regiones</a></li>
			        <li><a href="badges.html"><i class="material-icons left"> more</i>Acercade..</a></li>
			        <li><a href="collapsible.html"><i class="material-icons left">person_add</i>Regístrate</a></li>
			      </ul> -->
			      
			    <!-- Declaracion del menu Principal -->
			    <?php wp_nav_menu(
			    	array(
			    		'theme_location' => 'Principal',
			    		'container' => 'ul',
			    		'container_class' => 'right hide-on-med-and-down',
			    		'container_id' => 'nav-mobile'
					    
			    )) ;?>
			    </div>

	  		</nav>
	  		<ul class="sidenav" id="mobile-demo">
			    <li><a href="sass.html">Sass</a></li>
			    <li><a href="badges.html">Components</a></li>
			    <li><a href="collapsible.html">Javascript</a></li>
			    <li><a href="mobile.html">Mobile</a></li>
			 </ul>
	    </div>
	  </div>
	</header><!-- #masthead -->


	    <div class="container-fluid card main">
	    	<div class="titulo-sitio">
		<h1 class=""><?php bloginfo() ?></h1>

	</div>
