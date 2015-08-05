<div id="comments">
	<h2><?php comments_number(); ?></h2>

	<?php if ( have_comments() ) : ?>
		<ol>
			<?php wp_list_comments(); ?>
		</ol>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p><?php _e('Comments are closed.', 'template') ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>