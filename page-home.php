<?php /*template name: Home Page Template*/ ?>
<?php get_header(); ?>


<!-- Hero Image Section -->
    <div class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('hero-image'); ?>
        </div>
    </div>


<!-- About Us Text Block Section -->
    <div class="row">
        <div class="two-thirds column">
            <?php dynamic_sidebar('about-us'); ?>
        </div>
        <div class="one-third column sidebar">
          <!-- sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>

<!-- Interior Pages Section -->
<div class="photo-container">
    <div class="row">
        <div class="one-third column">
            <?php dynamic_sidebar('bottom-left-home'); ?>
        </div>
    </div>

    <div class="row">
        <div class="one-third column">
            <?php dynamic_sidebar('bottom-middle-home'); ?>
        </div>
    </div>

    <div class="row">
        <div class="one-third column">
            <?php dynamic_sidebar('bottom-right-home'); ?>
        </div>
    </div>
  </div>



<?php get_footer(); ?>
