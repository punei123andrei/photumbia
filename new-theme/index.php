<?php 

get_header();
?>

<div class="container">
    
<div class="row">

  <div class=" d-none d-md-block">
    <div class="row" >



 <div class="cold-md-2 sticky" id="aside"> <!-- Aside Menu -->

 

    <a href="../gallery.html"><div class="slide" style="max-width:500px">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/acrobats.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/bacau.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/bee.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/balance.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/canon.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/depth-flower'); ?>.jpg" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/dsc05187.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/exposure.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/filters.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/flower.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/flowers.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/garden.jpg'); ?>" style="width:100%">
  
      </div></a> <!-- End of slide -->



      <ul class="nav flex-column ">

        <li class="nav-item">
            <a class="nav-link" href="#top">Understanding Exposure</a></li>
        <li class="nav-item">
            <a class="nav-link" href="#iso">ISO</a></li>
        <li class="nav-item">
            <a class="nav-link" href="#shutter-speed">Shutter Speed</a></li>
        <li class="nav-item">
            <a class="nav-link" href="#aperture">Aperture</a></li>

      </ul>

    


      

    </div> <!-- End of Aside Menu -->

    </div> <!-- End of Inner Row -->
  </div> <!-- End of display Div -->

</div>
</div>


<article>


  <div class="container  offset-md-4 col-md-8">
    <div class="row">

      <?php 
    while (have_posts()) {
      the_post();?>

    <div class="col-sm-12 col-md-6 col-lg-4"> <!-- Colum Div -->
      
    <div class="card">
  <a href="pages/bokeh-article.html"><img src="<?php the_post_thumbnail(); ?>" class="card-img-top" alt="bokeh background"></a>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <hr>
    <div class="metabox">
      <p>Posted By <?php the_author_posts_link(); ?> on <?php the_time('j M Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
      <?php the_excerpt(); ?>

    </div>
    
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
    <a class=" share-button btn btn-outline-success btn-sm" href="#"><i class="fa fa-share"></i></a>
  </div> <!-- End of Card-Body Div -->
</div> <!-- End of Card Div -->

    </div> <!-- End of Column Div -->

      <?php
    }

     ?>

    </div> <!-- End of row Div -->

    




    

  </div>

<?php

get_footer();

 ?>