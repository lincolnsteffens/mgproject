<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="quantity">
	<input type="text" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $input_value ); ?>" title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'smarty' ) ?>" class="input-text qty text" size="4" />
	<a href="#" class="quantity-control quantity-control_plus"><i class="fa fa-caret-up"></i></a>
	<a href="#" class="quantity-control quantity-control_minus"><i class="fa fa-caret-down"></i></a>
</div>