<div class="footer-container">
    <div class="row">
      <!--  <div class="nine columns"> -->
            <!--wp_nav_menu(array(
                'theme location' => 'footer-menu',
                'container class' => 'menu footer'
            ));  ?>
        </div> -->

        <div class="one-third column">
              <?php dynamic_sidebar('left-footer'); ?>
        </div>

        <div class="one-third column">
              <?php dynamic_sidebar('middle-footer'); ?>
        </div>

        <div class="one-third column">
            <?php dynamic_sidebar('right-footer'); ?>
        </div>

    </div>
    <?php wp_footer(); ?>
  </body>
</html>
</div>
