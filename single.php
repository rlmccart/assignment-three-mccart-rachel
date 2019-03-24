<? php /*Template Name: Single Blog Post */ get_header(); ?>
<div class="container">

<<?php
    if(have_posts()){
        while(have_posts()){
            the_post();?>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="post-date"><?php echo "Published: " . get_the_date(); ?></p>
            <div class="post-feature"><?php the_post_thumbnail('thumb'); ?></div>
            <?php the_content(); ?>
            <p><?php echo "This post written by: " . get_the_author(); ?></p>
  <?php }// end while loop
    } // end if statement
    ?>


<!-- About Us Text Block Section -->
    <div class="row">
        <div class="two-thirds column single">
            <?php dynamic_sidebar('about-us'); ?>
        </div>
        <div class="one-third column sidebar single">
          <!-- sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>
