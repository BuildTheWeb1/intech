<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="container-fluid main-top">
      <div class="container" id="header">
        <nav
          class="navbar navbar-expand-lg navbar-light px-xl-0 px-lg-2 mx-auto"
          id="navbar"
        >
          <a class="navbar-brand" href="/"
            ><img src="<?php echo wp_get_attachment_url(34); ?>" class="img-fluid" alt="Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarMobile"
            aria-controls="navbarMobile"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-lg-end justify-content-md-center justify-content-sm-center justify-content-center"
            id="navbarMobile"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link hvr-icon-down" href="tel:18005082265"
                  ><i class="fas fa-mobile-alt hvr-icon"></i> (800)­ 508-2265</a
                >
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/" target="_blank">Home</a>
              </li>
              <li class="nav-item separator">
                <a class="nav-link" href="/" target="_blank">About Us</a>
              </li>
              <li class="nav-item separator">
                <a class="nav-link" href="/" target="_blank">Services</a>
              </li>
              <li class="nav-item separator">
                <a class="nav-link" href="/" target="_blank">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container inner-header">
        <div
          class="row flex-lg-row flex-md-column-reverse flex-sm-column-reverse flex-column-reverse"
        >
          <div
            class="col-lg-6 col-md-12 text-lg-left text-md-center text-sm-center text-center"
          >
            <h1 class="text-uppercase">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </h1>
            <p class="header-inner-text mb-0">
              Etiam ac sodales orci, id tristique magna. Etiam sit amet lacus eu
              diam faucibus mattis. Nam convallis lobortis sapien, et consequat
              volutpat in.
            </p>
            <button
              type="button"
              id="submit-btn"
              class="btn btn-link"
              data-toggle="modal"
              data-target="#products"
            >
              Submit
            </button>
            <!-- Modal -->
            <div
              class="modal fade"
              id="products"
              tabindex="-1"
              role="dialog"
              aria-labelledby="selectedProducts"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h5
                      class="modal-title text-uppercase"
                      id="selectedProducts"
                    >
                      Your Cart
                    </h5>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body d-flex flex-wrap text-dark"></div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-primary">
                      Clear Cart
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="products-column col-lg-6 col-md-12 px-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5"
          >
            <div class="card border-0 rounded-0">
              <div
                class="card-header rounded-0 border-bottom-0 text-uppercase position-relative"
              >
                <p class="mb-0 product-title">
                  Please select what kind of products do you prefer
                </p>
                <a href="#" class="dropdown" id="category-dropdown"></a>
              </div>
              <div class="card-body position-relative" id="list-products">
                <div class="card-dropdown no-show">
                  <div class="container">
                    <div class="row">
                      <?php 
                        $taxonomy = 'category';
                        $terms = get_terms($taxonomy); // Get all terms of a taxonomy 
                        if ( $terms && !is_wp_error( $terms ) ) :
                                foreach ( $terms as $term ) { ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                      <a href="#" class="prod-cat" onclick="filterSelection('<?php echo $term->slug ?>')"><?php echo $term->name; ?></a>
                                    </div>
                                <?php }
                        endif;?>
                    </div>
                  </div>
                </div>
                <?php
                  $homeProducts = new WP_Query(array(
                    'posts_per_page' => 10,
                    'post_type' => 'product'
                  ));
                  while($homeProducts->have_posts()) {
                  $homeProducts-> the_post(); ?>
                      <div class="media <?php 
                      $product_terms = wp_get_object_terms( $post->ID, 'category' );
                      if ( ! empty( $product_terms ) ) {
                        if ( ! is_wp_error( $product_terms ) ) {
                          foreach( $product_terms as $term ) {
                            echo $term->slug  . ' ';
                          }
                        }
                      }
                       ?>justify-content-between align-items-center">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="align-self-center mr-3" alt="<?php 
                        echo get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
                        ?>"/>
                        <p class="box-item flex-grow-1 mb-0"><?php the_title(); ?></p>
                        <input type="radio" aria-label="select input" />
                      </div>
                  <?php  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>