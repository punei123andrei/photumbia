<?php 
get_header();
while(have_posts()){ 
	the_post();?>

	

	<main>

<section>



  <div class="container">
    
<div class="row">

  <div class=" d-none d-md-block">
    <div class="row" >



 <div class="cold-md-2 sticky" id="aside"> <!-- Aside Menu -->

  <?php if(get_the_ID() == 54 or get_the_ID() == 56 or get_the_ID() == 46 or in_category('Effects') or in_category('tools')){?>

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
<?php } ?>
      
   <?php if(get_the_ID() == 54){?>


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

      <?php
}  ?>


<?php if(get_the_ID() == 56){?>


      <ul class="nav flex-column ">

        <li class="nav-item">
    <a class="nav-link " href="#balance">Balance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#symetry">Symetry</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#formal-balance">Formal Balance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#informal-balance">Informal Balance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#color-balance">Color Balance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#golden-ratio">The Golden Ratio</a>
  </li>

      </ul>

      <?php
} ?>


<?php if(in_category('Effects')){?>


      <ul class="nav flex-column ">

    <?php  $homepagePosts = new WP_Query(array(
'post_per_page' => 9,
'category_name' => 'Effects',
));

while($homepagePosts->have_posts()){

$homepagePosts->the_post();

 ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  
<?php } ?>
      </ul>

      <?php
} wp_reset_postdata(); ?>

<?php if(in_category('tools')){?>


      <ul class="nav flex-column ">

    <?php  $homepagePosts = new WP_Query(array(
'post_per_page' => 9,
'category_name' => 'tools',
));

while($homepagePosts->have_posts()){

$homepagePosts->the_post();

 ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  
<?php } ?>
      </ul>

      <?php
} wp_reset_postdata(); ?>

    </div> <!-- End of Aside Menu -->

    </div> <!-- End of Inner Row -->
  </div> <!-- End of display Div -->


<div class=" offset-md-4 col-md-8">

<article>

      <!-- Introduction -->

      <h1 class="main-head-article"><?php the_title(); ?></h1>
      <?php the_content(); ?>

    </article>

    <a href="#top" title="Go to top" class="arrow hide"><i class="fa fa-arrow-circle-up"></i></a>
     
</div> <!-- Flex-fill Div -->
</div> <!-- End of Row-Outter Div -->

  </div> <!-- End of Container Div -->

</section>
</main>

	<?php
}
get_footer();
 ?>

