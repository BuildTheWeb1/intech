<div class="container-fluid" id="footer">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-2 col-md-12 d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-center  pr-lg-0"
          >
            <p class="mb-0 py-2">
            &copy;<?php echo date("Y"); ?> All Rights Reserved
            </p>
          </div>
          <div class="col-lg-6 col-md-12">
            <nav
              class="navbar navbar-expand-lg navbar-light justify-content-lg-start justify-content-md-center justify-content-center"
            >
              <ul
                class="navbar-nav flex-lg-row flex-md-row flex-sm-row flex-column align-items-sm-center align-items-center"
              >
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item separator">
                  <a class="nav-link" href="#">Terms and Conditions</a>
                </li>
                <li class="nav-item separator">
                  <a class="nav-link" href="#">Sitemap</a>
                </li>
                <li class="nav-item separator">
                  <a class="nav-link " href="#">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <div
            class="col-lg-2 col-md-12 d-flex justify-content-around align-items-center"
          >
            <a
              href="https://www.facebook.com/inSegment"
              target="_blank"
              class="social-links hvr-icon-down"
              ><i class="fa fa-facebook hvr-icon" aria-hidden="true"></i
            ></a>
            <a
              href="https://www.youtube.com/user/inSegment"
              target="_blank"
              class="social-links hvr-icon-down"
              ><i class="fa fa-youtube hvr-icon" aria-hidden="true"></i
            ></a>
            <a
              href="https://www.linkedin.com/company/insegment"
              target="_blank"
              class="social-links hvr-icon-down"
              ><i class="fa fa-linkedin hvr-icon" aria-hidden="true"></i
            ></a>
            <a
              href="https://twitter.com/insegment"
              target="_blank"
              class="social-links hvr-icon-down"
              ><i class="fa fa-twitter hvr-icon" aria-hidden="true"></i
            ></a>
          </div>
          <div
            class="col-lg-2 col-md-12 d-flex align-items-center justify-content-lg-end justify-content-center mt-lg-0 mt-md-3 mt-3"
          >
            <p class="mb-0">Powered by</p>
            <a href="http://www.intechdynamics.com/" target="_blank"
              ><img
                src="<?php echo wp_get_attachment_url(35); ?>"
                class="img-fluid"
                alt="inTech footer logo"
            /></a>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>