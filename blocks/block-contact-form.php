<?php
//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response( $type, $message ) {

  global $response;

  if ( $type == "success" )$response = "<div class=' border bw-3 currentColor color_succes rounded_sm'><p class='color_inherit m_0'>{$message}</p></div>";
  else $response = "<div class=' border bw-3 currentColor color_error rounded_sm'><p class='color_inherit m_0'>{$message}</p></div>";
}

//response messages
$missing_content = "Please supply all information.";
$email_invalid = "Email address invalid.";
$message_unsent = "Message was not sent. Try Again.";
$message_sent = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST[ 'message_name' ];
$email = $_POST[ 'message_email' ];
$message = $_POST[ 'message_text' ];
$human = $_POST[ 'message_email' ];

//php mailer variables
$to = get_option( 'admin_email' );
$subject = "Someone sent a message from " . get_bloginfo( 'name' );
$headers = 'From: ' . $email . "\r\n" .
'Reply-To: ' . $email . "\r\n";

if ( !$human == ( strlen( trim( $string ) ) > 0 ) ) {
  if ( $human == ( strlen( trim( $string ) ) > 1 ) )my_contact_form_generate_response( "error", $not_human ); //not human!
  else {

    //validate email
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
      my_contact_form_generate_response( "error", $email_invalid );
    else //email is valid
    {
      //validate presence of name and message
      if ( empty( $name ) || empty( $message ) ) {
        my_contact_form_generate_response( "error", $missing_content );
      } else //ready to go!
      {
        $sent = wp_mail( $to, $subject, strip_tags( $message ), $headers );
        if ( $sent )my_contact_form_generate_response( "success", $message_sent ); //message sent!
        else my_contact_form_generate_response( "error", $message_unsent ); //message wasn't sent
      }
    }
  }
} else if ( $_POST[ 'submitted' ] )my_contact_form_generate_response( "error", $missing_content );

?>
<section id="respond">
  <form class="row" action="<?php the_permalink();?>#respond" method="post">
    <div class="col-12 col-md-6">
      <label for="name">Name
        <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
      </label>
    </div>
    <div class="col-12 col-md-6">
      <label for="message_email">Email
        <input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
      </label>
    </div>
    <div class="col-12">
      <label for="message_text">Message</label>
      <textarea class="box-shadow js__textarea" type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
    </div>
    <input type="hidden" name="submitted" value="1">
    <div class="col-12"> <?php echo $response; ?> </div>
    <div class="col-12">
      <input class="float-right w-auto" type="submit" id="submit">
    </div>
  </form>
</section>
