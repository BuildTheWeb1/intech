<?php get_header(); ?>

 <!-- Slider -->
 <div class="container-fluid">
      <div class="container">
        <div class="slideshow-container">
          <div class="slides">
            <a href="<?php echo wp_get_attachment_url(31); ?>" data-lightbox="slider"
              ><img src="<?php echo wp_get_attachment_url(31); ?>" class="img-fluid img-slider"
            /></a>
            <a href="<?php echo wp_get_attachment_url(32); ?>" data-lightbox="slider"
              ><img src="<?php echo wp_get_attachment_url(32); ?>" class="img-fluid img-slider"
            /></a>
            <a href="<?php echo wp_get_attachment_url(33); ?>" data-lightbox="slider"
              ><img src="<?php echo wp_get_attachment_url(33); ?>" class="img-fluid img-slider"
            /></a>
          </div>

          <div class="slides">
            <a href="<?php echo wp_get_attachment_url(33); ?>" data-lightbox="slider-2"
              ><img src="<?php echo wp_get_attachment_url(33); ?>" class="img-fluid img-slider"
            /></a>
            <a href="<?php echo wp_get_attachment_url(32); ?>" data-lightbox="slider-2"
              ><img src="<?php echo wp_get_attachment_url(32); ?>" class="img-fluid img-slider"
            /></a>
            <a href="<?php echo wp_get_attachment_url(31); ?>" data-lightbox="slider-2"
              ><img src="<?php echo wp_get_attachment_url(31); ?>" class="img-fluid img-slider"
            /></a>
          </div>

          <div class="slides">
            <a href="<?php echo wp_get_attachment_url(32); ?>" data-lightbox="slider-3"
              ><img src="<?php echo wp_get_attachment_url(32); ?>" class="img-fluid img-slider"
            /></a>
            <a href="<?php echo wp_get_attachment_url(31); ?>" data-lightbox="slider-3"
              ><img src="<?php echo wp_get_attachment_url(31); ?>" class="img-fluid img-slider"
            /></a>
            <a href="<?php echo wp_get_attachment_url(33); ?>" data-lightbox="slider-3"
              ><img src="<?php echo wp_get_attachment_url(33); ?>" class="img-fluid img-slider"
            /></a>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      // slider
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        let i;
        const slides = document.getElementsByClassName('slides');
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = 'none';
        }
        slides[slideIndex - 1].style.display = 'flex';
      }
    </script>


  <?php get_footer(); ?>