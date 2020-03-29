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

          <form>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="contact-name">Name <span class="contact-required">*</span></label>
                  <input id="contact-name" type="text" class="form-control" placeholder="Enter your name *">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="contact-email">Email <span class="contact-required">*</span></label>
                  <input id="contact-email" type="email" class="form-control" placeholder="Enter your email *">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="contact-phone">Phone</label>
                  <input id="contact-phone" type="text" class="form-control" placeholder="Enter your phone">
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="contact-message">Message <span class="contact-required">*</span></label>
                  <textarea id="contact-message" class="form-control" placeholder="Enter your message *"
                    rows="4"></textarea>

                </div>
              </div>
              <div class="col-md-12">
                <p class="text-muted"><strong><span class="contact-required">*</span></strong> These fields are required.
                </p>
              </div>
              <div class="col-md-12">
                <input type="submit" class="btn btn-small btn-primary" value="Send Message">
              </div>
            </div>
          </form>

        <?php //echo do_shortcode( '[contact-form-7 id="218" title="Contact Form"]' ); ?>

		    </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
