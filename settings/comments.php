<?php
// COMMENTS
add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );
function mo_comment_fields_custom_html( $fields ) {
	// first unset the existing fields:
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	// then re-define them as needed:
	$fields = [
		'comment_field' => '<div class="comment-form-comment float-left w-1-1 mb-20"><label for="comment">' . _x( 'Comment', 'noun', 'textdomain' ) . '</label> ' .
			'<textarea class="resize-none" id="comment" name="comment" cols="45" rows="1" aria-required="true" required="required" data-autoresize ></textarea></div>',
		
		'author' => '<div class="comment-form-author float-left w-1-1 mb-20">' . '<label for="author">' . __( 'Name', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></div>',
		
		'email'  => '<div class="comment-form-email float-left w-1-1 mb-20"><label for="email">' . __( 'E-mails', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>'
	];
	// done customizing, now return the fields:
	return $fields;
}
// remove default comment form so it won't appear twice
add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }