<?php
  get_header();
?>

	<section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
        <h2>News Category - <?php single_term_title(); ?></h2>
        <hr>

        <?php if(have_posts()) : while(have_posts()) : the_post();  ?>

          <h3><?php the_title(); ?></h3>

          <?php the_content(); ?>

        <?php endwhile; ?>

        <?php bootstrap_pagination(); ?>
        
        <?php else : ?>
        <p>There are no News exist in this Category</p>
        <?php endif;
        wp_reset_postdata(); ?>

		    </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();