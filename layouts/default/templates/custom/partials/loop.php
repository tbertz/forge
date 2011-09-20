<?php if (have_posts()) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'clear' ); ?>>
			<div class="post-header clear">
				<h2 class="post-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php esc_attr( sprintf( __( 'Permanent Link to %s', '<%= theme_id %>' ), the_title_attribute( 'echo=false' ) ) ); ?>"><?php the_title(); ?></a>
				</h2>
				<p><?php the_time( __( 'F jS, Y', '<%= theme_id %>' ) ); ?></p>
				<p><?php the_author(); ?></p>
				<?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( '<%= theme_id %>-thumb' ); ?>
					</a>
				<?php } ?>
			</div><!--end post-header-->
			<div class="entry entry-post clear">
				<?php the_content( __( 'Read more', '<%= theme_id %>' )); ?>
				<?php edit_post_link( __( 'Edit this', '<%= theme_id %>' ), '<p>', '</p>' ); ?>
			</div><!--end entry-->
			<div class="post-footer clear">
				<p><?php comments_popup_link( __( 'Leave a comment', '<%= theme_id %>' ), __( '1 Comment', '<%= theme_id %>' ), __( '% Comments', '<%= theme_id %>' ), NULL, NULL ); ?></p>
			</div><!--end post-footer-->
		</div><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<div class="pagination index">
			<div class="alignleft"><?php previous_posts_link( __( '&larr; Newer entries', '<%= theme_id %>' )); ?></div>
			<div class="alignright"><?php next_posts_link( __( 'Older entries &rarr;', '<%= theme_id %>' )); ?></div>
	</div><!--end pagination-->
	<?php else : ?>
<?php endif; ?>