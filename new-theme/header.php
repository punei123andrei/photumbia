<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots"
          content="index, follow">
    <meta name="keywords" 
          content="Photography, Landscape, Social, Camera Gear, Focus, Semi-auto modes, Camera Filters, Bokeh">
    <meta http-equiv="author" 
          content="Andrei Punei">
    <meta http-equiv="pragma" content="no-cache"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="banner"> <!-- Background-div -->

			<header id="top">

		<nav class="navbar navbar-dark navbar-expand-lg justify-content-center">
		<!-- Logo -->

  <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('/article-images/logo-photumbia.png'); ?>" alt="logo" class="brandimg"></a>

  		<!-- Menu Toggler -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

				




		<!-- Main Menu full width -->


  <div class="collapse navbar-collapse align-self-end" id="navbarNav"> 
    <ul class="navbar-nav align-items-middle">

    	<li class="nav-item">
        <a class="nav-link" <?php if(is_page('home')) echo 'id="active"' ?> href="<?php echo site_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?php if(is_page('exposure')) echo 'id="active"' ?> href="<?php echo site_url('/Exposure'); ?>">Exposure</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?php if(is_page('balance')) echo 'id="active"' ?> href="<?php echo site_url('/Balance'); ?>">Balance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?php if(is_page('effects') or in_category('Effects')) echo 'id="active"' ?> href="<?php echo site_url('/Effects'); ?>">Effects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?php if(is_page('utilities') or in_category('tools')) echo 'id="active"' ?> href="<?php echo site_url('/Utilities'); ?>">Utilities</a>
      </li>
       <li class="nav-item">
        <a <?php if(is_page('gallery-2')) echo 'id="active"' ?>  href="<?php echo site_url('/gallery-2'); ?>" class="nav-link">Gallery</a></li>
      
    </ul>

    <!-- <?php 
wp_nav_menu(array(
'theme_location' => 'headerMenuLocation'
));
     ?> -->
    


    <ul class="social-nav">
				<li>
					<a href="#"><img class="icono" src="<?php echo get_theme_file_uri('/article-images/wizz.png'); ?>" alt="facebook icon"></a>
					<a href="#"><img class="icono" src="<?php echo get_theme_file_uri('/article-images/iconmonstr-flickr-5-240.png'); ?>" alt="facebook icon"></a>
					
				</li>
			</ul>

  </div> <!-- End of NavBar -->

</nav>
</header>


</div><!--  End of Banner div Div -->
	
