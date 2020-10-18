<a class="cart-customlocation cart d-inline-block w-50 h-20 align-self-center w-lg-20 text-center position-relative" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
<svg class="cart__icon w-20 h-20 position-absolute top-0 left-0 text-black" version="1.1" id="Laag_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			 x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve">
  <path d="M352,128C352,57.4,294.6,0,224,0C153.4,0,96,57.4,96,128H0v304c0,44.2,35.8,80,80,80h288c44.2,0,80-35.8,80-80V128H352z
			 M224,32c52.9,0,96,43.1,96,96H128C128,75.1,171.1,32,224,32z M416,432c0,26.5-21.5,48-48,48H80c-26.5,0-48-21.5-48-48V160h384V432z
			"/>
</svg>
<span class="cart__total w-30 h-30 rounded-circle bg-hsl-black text-white text-center position-absolute mt-n5 right-0 mr-10 mr-lg-n30">
<?php
global $woocommerce;
$count = $woocommerce->cart->cart_contents_count;
echo sprintf( _n( '%d product', $count, 'text domain' ) );
?>
</span> </a>