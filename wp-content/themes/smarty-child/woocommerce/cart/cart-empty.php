<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

?>

<h3 class="cart-empty">
	<?php esc_html_e( 'Your cart is currently empty.', 'smarty' ) ?>
</h3>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<p class="return-to-shop">
	<a class="stm-btn stm-btn_outline stm-btn_blue stm-btn_md stm-btn_icon-right wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
		<?php esc_html_e( 'Return to shop', 'smarty' ) ?>
		<i class="stm-icon stm-icon-arrow-right"></i>
	</a>
</p>
