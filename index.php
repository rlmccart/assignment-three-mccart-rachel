<?php /*Template Name: Main Blog Page */ ?>

<?php get_header(); ?>

<!-- Blog Gallery Section -->
    <div class="row">
            <?php dynamic_sidebar('blog-gallery'); ?>
        </div>
    </div>

<div class="container-posts">
    <div class="row">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();?>
                <div class="one-half column posts">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_post_thumbnail('thumb'); ?>
                    <?php the_excerpt(); ?>
                   <p><?php echo "Published: " . get_the_date(); ?></p>
                   <p><?php echo "Article written by: " . get_the_author(); ?></p>
                 </div>
<?php        }// this ends the while loop
        }// this ends the if statement
    ?>
    </div>

    <div class="row">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();?>
                <div class="one-half column posts">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_post_thumbnail('thumb'); ?>
                    <?php the_excerpt(); ?>
                   <p><?php echo "Published: " . get_the_date(); ?></p>
                   <p><?php echo "Article written by: " . get_the_author(); ?></p>
                 </div>
<?php        }// this ends the while loop
        }// this ends the if statement
    ?>
    </div>
</div>



<?php get_footer(); ?>
