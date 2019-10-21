<?php get_header(); ?>

<main class="card">
<?php  
$page = get_page('217');
$content = apply_filters('the_content', $page->post_content); 
echo $content; ?></main>

 <?php get_footer(); ?>

