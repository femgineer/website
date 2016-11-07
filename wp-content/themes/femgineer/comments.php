<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php echo get_comments_number(). '&nbsp;Comments'; ?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 74,
				) ); 
			?>

		</ol><!-- .comment-list -->

		<?php
			/* Are there comments to navigate through? */
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; /* Check for comment navigation */ ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>

	<?php 
	
	$fields =  array(

  'author' =>
    '' .
    ( $req ? '<div class="twofield">' : '' ) .
    '<div class="form-details comment-form-author"><input placeholder="Name*" id="author" name="author" type="text" class="validcomment" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></div>',

  'email' =>
    ' ' .
    ( $req ? '' : '' ) .
    '<div class="comment-form-email form-details"><input placeholder="Email*" id="email" name="email" type="text" class="validcomment" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></div></div>',
);
	$args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'xhtml',

  'comment_field' =>  '' . _x( ' ', 'noun' ) .
    '<div class="form-details comentbox"><textarea placeholder="Comment*" class="validcomment" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></div>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '<p class="comment-notes">' .
    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
    '</p>',
   'comment_notes_after' =>'',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);
	comment_form($args); ?>

</div><!-- #comments -->