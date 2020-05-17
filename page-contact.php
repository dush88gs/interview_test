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

        <!-- <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="contact-name">Name <span class="contact-required">*</span></label>
              [text* your-name id:contact-name class:form-control placeholder "Enter your name"]
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="contact-email">Email <span class="contact-required">*</span></label>
              [email* your-email id:contact-email class:form-control placeholder "Enter your email"]
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="contact-phone">Phone <span class="contact-required">*</span></label>
              [text* your-phone id:contact-phone class:form-control placeholder "Enter your phone number"]
            </div>
          </div>
        <div class="col-sm-6">
            <div class="form-group">
              <label for="contact-country">Country <span class="contact-required">*</span></label>
              [select* your-country id:contact-country data:countries class:form-control]
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="contact-message">Message <span class="contact-required">*</span></label>
              [textarea* your-message x4 id:contact-message class:form-control placeholder "Enter your message"]            
            </div>
          </div>
          <div class="col-md-12">
            <p class="text-muted"><strong><span class="contact-required">*</span></strong> These fields are required.</p>
          </div>
          <div class="col-md-12">
            [submit class:btn class:btn-primary "Send Message"]
          </div>
        </div> -->

		    </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
