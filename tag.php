<?php get_header() ?>

<h2><?php _e('Tag Archive', 'template') ?> “<?php echo single_tag_title( '', false ); ?>”</h2>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('post') ?>
  <?php endwhile; ?>
<?php else: ?>
  <p><?php _e('No posts to display.', 'template') ?></p>
<?php endif; ?>

<?php get_footer() ?>