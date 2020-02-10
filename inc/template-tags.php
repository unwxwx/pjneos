<?php
/**
 * Custom template tags for this theme.
 * pjneos
 */


if ( ! function_exists( 'neosPostThumbnail' ) ) :
/**
 * Displays an optional post thumbnail.
 */
function neosPostThumbnail()
{
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
    ?>
    <?php if ( is_single() || is_page() ) : ?>
        <?php the_post_thumbnail( 'full', 'class=img-fluid' ); ?>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', 'class=img-fluid' ); ?></a>
    <?php endif; ?>
    <?php
}
endif;



if ( ! function_exists( 'neosEntryDate' ) ) :
/**
 * Prints HTML with date information for current post. Jan. 20, 2019
 */
function neosEntryDate()
{

	printf( '<a href="%1$s" rel="bookmark">%2$s</a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'M. d, Y' ) )
	);
}
endif;

if ( ! function_exists( 'neonPostedBy' ) ) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function neonPostedBy() {

        // Get the author name; wrap it in a link.
        $byline = sprintf(
        /* translators: %s: post author */
            __( 'By %s', 'pjneos' ),
            '<a class="meta-author-link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>'
        );

        echo $byline;
    }
endif;


if ( ! function_exists( 'neosPostComments' ) ) :
/**
 * Prints HTML with meta information for the comments.
 */
function neosPostComments()
{

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        $comments_number = get_comments_number();
        if ( '1' === $comments_number ) {
            /* translators: %s: Post title. */
            printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'pjneos' ), get_the_title() );
        } else {
            printf(
            /* translators: 1: Number of comments, 2: Post title. */
                _nx(
                    '%1$s Reply to &ldquo;%2$s&rdquo;',
                    '%1$s Replies to &ldquo;%2$s&rdquo;',
                    $comments_number,
                    'comments title',
                    'pjneos'
                ),
                number_format_i18n( $comments_number ),
                get_the_title()
            );
        }
	}
}
endif;

if ( ! function_exists( 'neosPostCategories' ) ) :
    /**
     * Prints HTML with current post categories.
     */
    function neosPostCategories() {
        $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'pjneos' ) );
        if ( $categories_list ) {
            printf( '%1$s %2$s',
                _x( 'Categories:', 'Used before category names.', 'pjneos' ),
                $categories_list
            );
        }
    }
endif;

if ( ! function_exists( 'neosPostTags' ) ) :
    /**
     * Prints HTML with current post tags.
     */
    function neosPostTags() {
        $tags_list = get_the_tag_list(
            _x( '', 'Used before list items, there is a space after the comma.', 'pjneos' ),
            _x( ', ', 'Used between list items, there is a space after the comma.', 'pjneos' )
        );
        if ( $tags_list ) {
            printf( '%1$s %2$s',
                _x( 'Tags:', 'Used before tag names.', 'pjneos' ),
                $tags_list
            );
        }
    }
endif;