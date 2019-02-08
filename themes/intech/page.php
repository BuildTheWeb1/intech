<?php get_header(); ?>

  <!-- Slider -->
<div class="container-fluid">
      <div class="container">
        <?php while(have_posts()) {
          the_post();
          the_title();
          the_content();
        } ?>
      </div>
    </div>


  <?php get_footer(); ?>