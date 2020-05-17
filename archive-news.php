<?php
  get_header();
?>

	<section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class() ?>>

          <h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>

        </div>

        <?php endwhile; wp_reset_postdata(); ?>

        <?php bootstrap_pagination(); ?>

        <?php else : ?>
        <p>There are no News exist</p>
        <?php endif; ?>

		    </div>
        <div class="col-md-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
