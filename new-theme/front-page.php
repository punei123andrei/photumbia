<?php get_header(); ?>


<main>

	<a href="#latest-posts"><div class="main-slide">

		<div class="header-slide">
		<h1>Latest Posts</h1>
		<img src="<?php echo get_theme_file_uri('/img/25623.svg'); ?>" alt="">
		</div>

  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/acrobats.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/bacau.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/bee.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/balance.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/canon.jpg'); ?>" style="width:100%">
<img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/depth-flower.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/dsc05187.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/exposure.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/filters.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/flower.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/flowers.jpg'); ?>" style="width:100%">
  <img class="mySlides fade w3-animate-fading " src="<?php echo get_theme_file_uri('/slide-img/garden.jpg'); ?>" style="width:100%">

  
      </div></a> <!-- End of slide -->
	
	<div class="container">

		


	<h1 id="latest-posts">Latest Posts</h1>

	<hr> 



<section id="gallery">
	<div class="container">
		<div class="row">

<?php  $homepagePosts = new WP_Query(array(
'post_per_page' => 9
));

while($homepagePosts->have_posts()){

$homepagePosts->the_post();

 ?>

		<div class="col-sm-12 col-md-6 col-lg-4"> <!-- Column Div -->

		<div class="card">
  <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?></a>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18); ?>.</p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a> <a class=" share-button btn btn-outline-success btn-sm" href="#"><i class="fa fa-share"></i></a>
  </div> <!-- End of Card-Body Div -->
</div> <!-- End of Card Div -->

		</div> <!-- End of column DiV -->
<?php } ?>
		</div> <!-- End of Row Div -->
	</div> <!-- End of container -->

</section>

</main>

	


	<?php
 get_footer();
 ?>

