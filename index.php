<?php get_header() ?>

<h2><?php _e('Latest Posts', 'template') ?></h2>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('post') ?>
  <?php endwhile; ?>
<?php else: ?>
  <p><?php _e('No posts to display.', 'template') ?></p>
<?php endif; ?>

<?php get_sidebar() ?>

<?php get_footer() ?>