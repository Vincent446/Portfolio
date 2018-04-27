<div class="container">
  <div class="row">

    <section class="col-12 text-center">
      <div class="row">

      <!-- Projects -->
      <?php $loop = new WP_Query( array( 'post_type' => 'projects', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-sm-12 col-md-4">
          <div class="card">
          <div class="img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <a class="btn btn-info" href="<?php the_permalink(); ?>">Läs mer</a>
          </div>
        </div>

      <?php endwhile; wp_reset_query(); ?>

      </div>
    </section>

  </div>
</div>
