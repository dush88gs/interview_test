<?php
/* Template Name: Contact */

get_header();
?>

	<section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <?php
          while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );

          endwhile; // End of the loop.
          ?>

        <?php echo do_shortcode( '[contact-form-7 id="41" title="Contact Form"]' ); ?>

		    </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
