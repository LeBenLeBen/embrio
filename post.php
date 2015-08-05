<article class="post">
  <h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php _e('Permalink to', 'template') ?> <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <p>
    <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
    <?php the_category() ?>
    <?php comments_popup_link(__('Leave a Comment', 'template'), __('1 Comment', 'template'), __('% Comments', 'template')); ?>
  </p>
  <?php the_content(__('Read more&hellip;', 'template')); ?>
</article>