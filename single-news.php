<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Interview_Test
 */

get_header();
?>

	<section class="common-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <?php
          while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            // the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          endwhile; // End of the loop.
          ?>

          <h3>Share:</h3>
          <!-- AddToAny BEGIN -->
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php echo get_post_permalink(); ?>" data-a2a-title="<?php echo the_title(); ?>">
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_email"></a>
          </div>
          <script async src="https://static.addtoany.com/menu/page.js"></script>
          <!-- AddToAny END -->

        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
