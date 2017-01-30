<?php get_header(); ?>
  <section class="row">
    <div class="twelve columns">
      <!--Begin loop-->
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
            } // end while
          } // end if
        ?>
      <!--End loop-->
    </div>
  </section>
<?php get_footer(); ?>
