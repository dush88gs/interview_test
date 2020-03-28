<?php
  get_header();

  $args = array(
    'post_type' => 'news',
    'post_status' => 'publish'
  );
  $news_query = new WP_Query( $args );
?>

	<section class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

        <?php if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>

          <h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>

        <?php endwhile; else : ?>
        <p>There are no News exist</p>
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
