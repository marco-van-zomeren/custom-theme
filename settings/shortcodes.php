<?php
// PAGE TITLE
function shortcode_pagetitle() {
  return get_the_title();
}
add_shortcode( 'page-title', 'shortcode_pagetitle' );

// BUTTON
function shortcode_primarybutton( $atts, $content = null ) {
  extract( shortcode_atts( array(
    'url' => '',
    'title' => '',
    'target' => '',
    'text' => '',
  ), $atts ) );
  $content = $text ? $text : $content;
  // Returns the button with a link
  if ( $url ) {
    $link_attr = array(
      'href' => esc_url( $url ),
      'title' => esc_attr( $title ),
      'target' => ( 'blank' == $target ) ? '_blank' : '',
      'class' => 'btn border bw-2 border-tertiary text-uppercase text-tertiary hover:text-white hover:bg-tertiary rounded-pill'
    );
    $link_attrs_str = '';
    foreach ( $link_attr as $key => $val ) {
      if ( $val ) {
        $link_attrs_str .= ' ' . $key . '="' . $val . '"';
      }
    }
    return '<a' . $link_attrs_str . '>' . do_shortcode( $content ) . '</a>';
  }

  else {
    return '<span class="custombutton"><span>' . do_shortcode( $content ) . '</span></span>';
  }
}
add_shortcode( 'primary-button', 'shortcode_primarybutton' );