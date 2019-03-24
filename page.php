<? php /*Template Name: Single Blog Post */ get_header(); ?>
<div class="container">

  <!-- Hero Image Section -->
      <div class="row">
          <div class="twelve columns">
              <?php dynamic_sidebar('hero-image-blog'); ?>
          </div>
      </div>

<!-- About Us Text Block Section -->
    <div class="row">
        <div class="two-thirds column single">
            <?php dynamic_sidebar('about-us-single'); ?>
        </div>
        <div class="one-third column sidebar single">
          <!-- sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>
