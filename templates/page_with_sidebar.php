<?php
// Template Name: Page with sidebar

get_header() ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <article class="page">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>

<?php get_sidebar() ?>

<?php get_footer() ?>