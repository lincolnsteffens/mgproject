<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! wc_coupons_enabled() ) {
	return;
}

if ( ! WC()->cart->applied_coupons ) {
    $info_message = apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'smarty' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'smarty' ) . '</a>' );
    wc_print_notice( $info_message, 'notice' );
}
?>

<form class="checkout_coupon" method="post" style="display:none">

	<div class="row">
		<div class="col-sm-6 col-xs-12">
			<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'smarty' ); ?>" id="coupon_code" value="" />
		</div>
		<div class="col-sm-6 col-xs-12">
			<button type="submit" class="stm-btn stm-btn_outline stm-btn_blue stm-btn_md" name="apply_coupon" value="1"><?php esc_html_e( 'Apply Coupon', 'smarty' ); ?></button>
		</div>
	</div>
</form>
