<?php get_header() ?>

<?php if ( is_day() ) : ?>
  <h2><?php _e('Archive', 'template') ?> <?= get_the_date( 'D M Y' ); ?></h2>
<?php elseif ( is_month() ) : ?>
  <h2><?php _e('Archive', 'template') ?> <?= get_the_date( 'M Y' ); ?></h2>
<?php elseif ( is_year() ) : ?>
  <h2><?php _e('Archive', 'template') ?> <?= get_the_date( 'Y' ); ?></h2>
<?php else : ?>
  <h2><?php _e('Archive', 'template') ?></h2>
<?php endif; ?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('post') ?>
  <?php endwhile; ?>
<?php else: ?>
  <p><?php _e('No posts to display.', 'template') ?></p>
<?php endif; ?>

<?php get_footer() ?>