      <footer class="row gc-footer">

        <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-end order-md-2">

          <p><a href="<?php echo get_field( 'privacy_policy_page', 'option' ); ?>">Privacy Policy</a></p>
          <p><a href="<?php echo get_field( 'terms_conditions_page', 'option'); ?>">Terms & Conditions</a></p>

        </div>

        <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-start justify-content-center order-md-1">

            <p>&copy<?php the_date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>

        </div>

      </footer>

    </div> <!--.container-fluid-->

    <?php wp_footer(); ?>

  </body>
</html>
