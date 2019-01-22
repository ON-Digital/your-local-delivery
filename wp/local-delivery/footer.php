    <footer class="bg-secondary grid-wrp whole-12cols ldv-footer justify-items-center">
      <div class="ldv-footer__logo mt-5 mb-4 ml-auto ml-lg-0">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-negative.png" class="mw-100" alt="">
      </div>

      <div class="grid-wrp ldv-footer__contact mt-5 mb-4">
        <p class="text-primary"><?php _e( 'Company info', 'ldv' ) ?></p>

        <p class="text-white">
          <?php _e( '3655 NW 115th Ave Doral, FL  33178' ); ?>

          <span class="d-block">
            305-310-1241
            786-930-0323
          </span>
        </p>
      </div>

      <div class="ldv_footer__social mt-5 mb-4 mr-4">
        <p class="text-center text-lg-right w-100">
        <span class="text-primary d-inline-block">
            <?php _e( 'Stay connected', 'ldv' ); ?>
        </span>

        <span class="icon icon-facebook icon-size text-white p-3 bg-secondary-darker rounded-circle ml-1 d-inline-block"></span>
        <span class="icon icon-twitter icon-size text-white p-3 bg-secondary-darker rounded-circle ml-1 d-inline-block"></span>
        <span class="icon icon-yelp icon-size text-white p-3 bg-secondary-darker rounded-circle ml-1 d-inline-block"></span>
        <span class="icon icon-google-plus icon-size text-white p-3 bg-secondary-darker rounded-circle ml-1 d-inline-block mt-2 mt-xl-0"></span>
      </p>

    </div>

    <div class="bg-secondary--darker grid-12cols w-100">
      <p class="text-white pt-3 text-gray text-center w-100">
          <?php _e( 'Your Local Delivery Copyright © 2019', 'ldv' ); ?>
          <a href="https://ondigital.co" target="_blank" class="text-primary">
            <?php _e( 'On digital', 'ldv' ); ?>
          </a>
      </p>
    </div>
    </footer>

    <?php
      wp_footer();
    ?>
</body>
</html>
