<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p class="woocommerce-thankyou-order-failed"><i class="fa fa-exclamation-triangle"></i><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'smarty' ); ?></p>

		<p class="woocommerce-thankyou-order-failed-actions">
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'smarty' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My Account', 'smarty' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<p class="woocommerce-thankyou-order-received"><i class="fa fa-check-circle"></i><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'smarty' ), $order ); ?></p>
		<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>

		<table class="shop_table woocommerce-thankyou-order-details order_details">
			<thead>
				<tr>
					<th><?php esc_html_e( 'Order Number:', 'smarty' ); ?></th>
					<th><?php esc_html_e( 'Date:', 'smarty' ); ?></th>
					<th><?php esc_html_e( 'Total:', 'smarty' ); ?></th>
					<th><?php esc_html_e( 'Payment Method:', 'smarty' ); ?></th>
				</tr>
			</thead>
			<tr>
				<td class="order"><?php echo wp_kses_post( $order->get_order_number() ); ?></td>
				<td class="date"><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></td>
				<td class="total"><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></td>
			<?php if ( $order->payment_method_title ) : ?>
				<td class="method"><?php echo wp_kses_post( $order->payment_method_title ); ?></td>
			<?php endif; ?>
			</tr>
		</table>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'smarty' ), null ); ?></p>

<?php endif; ?>
