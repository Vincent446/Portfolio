<?php get_header(); ?>

<!-- Navigation -->

<?php get_template_part('partials/content', 'navigation'); ?>

<!-- Hero -->

<?php get_template_part('partials/content', 'hero'); ?>

<div class="container">
  <div class="row justify-content-center">

<?php if (have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

    <article id="project">
      <img src="<?php the_post_thumbnail_url(); ?>"  />
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </article>

<?php endwhile; ?>
<?php endif; ?>

  </div>
</div>


<?php get_footer(); ?>
