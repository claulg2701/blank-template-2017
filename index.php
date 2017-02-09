<?php get_header(); ?>
  <section class="row">
    <div class="twelve columns">
      <!--Begin loop-->
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();?>
                <h3><?php the_title(); ?></h3>
			          <?php
                if ( has_post_thumbnail() ) {
	                    the_post_thumbnail('thumbnail');
                }
               the_excerpt();
            } // end while
          } // end if
        ?>
      <!--End loop-->
    </div>
  </section>
<?php get_footer(); ?>
