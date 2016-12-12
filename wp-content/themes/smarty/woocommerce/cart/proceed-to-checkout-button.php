<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="checkout-button stm-btn stm-btn_flat stm-btn_md stm-btn_blue stm-btn_icon-right wc-forward">
	<?php echo esc_html__( 'Proceed to Checkout', 'smarty' ); ?><i class="stm-icon stm-icon-arrow-right"></i>
</a>
