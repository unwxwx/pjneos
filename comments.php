<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="pt-5">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
        <h3 class="mb-5">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'pjneos' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'pjneos'
					),
					number_format_i18n( $comments_number ),
					__( 'Comments', 'pjneos' )
				);
			}
			?>
		</h3>

        <ul class="comment-list">
			<?php
				wp_list_comments( array(
                    'walker'      => new Neos_Walker_Comment(),
					'avatar_size' => 50,
					'style'       => 'ul',
					'short_ping'  => true,
					'reply_text'  => __( 'Reply', 'pjneos' ),
				) );
			?>
		</ul>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'pjneos' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'pjneos' ) . '</span>',
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'pjneos' ); ?></p>
	<?php
	endif;

    $args = array(
        'fields' => array(
            'author' => '<div class="form-group"><label for="name">Name *</label> <input type="text" class="form-control" id="author" name="author"></div>',
            'email' => '<div class="form-group"><label for="email">Email *</label> <input type="email" class="form-control" id="email" name="email"></div>',
         ),
        'comment_field' => '<div class="form-group"><label for="message">Message</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea></div>',
        'submit_field' => '<div class="form-group">%1$s %2$s</div>',
        'class_submit' => 'btn btn-primary text-white'

    );
	comment_form($args);
	?>

</div><!-- #comments -->
