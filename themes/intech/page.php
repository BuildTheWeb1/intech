<?php get_header(); ?>

  <!-- Slider -->
<div class="container-fluid">
      <div class="container">
        <?php while(have_posts()) {
          the_post(); ?>
        <h2><?php the_title(); ?></h2> 
        <p><?php the_content(); ?></p>
        <?php } ?>
      </div>
    </div>


  <?php get_footer(); ?>