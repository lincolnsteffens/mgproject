<div class="join-event">
	<h4 class="join-event__title"><?php esc_html_e( 'Join event', 'smarty' ); ?></h4>
	<form action="<?php echo esc_url( home_url() ); ?>" method="post" class="form form_join-event">
		<div class="form__content">
			<div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea name="event_member[message]" cols="30" rows="10" placeholder="<?php esc_attr_e('Message', 'smarty'); ?> *"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" name="event_member[name]" placeholder="<?php esc_attr_e( 'Name', 'smarty'); ?> *" value="" />
                        </div>
                        <div class="col-xs-12">
                            <input type="text" name="event_member[email]" placeholder="<?php esc_attr_e( 'E-Mail', 'smarty'); ?> *" value=""/>
                        </div>
                        <div class="col-xs-12">
                            <input type="text" name="event_member[phone]" placeholder="<?php esc_attr_e('Phone', 'smarty'); ?>" value="" />
                        </div>
                    </div>
                </div>
				<div class="col-xs-12">
					<button type="submit" class="form__submit stm-btn stm-btn_flat stm-btn_md stm-btn_pink stm-btn_icon-right"><?php esc_html_e('Submit', 'smarty'); ?></button>
					<input type="hidden" name="action" value="event_join" />
					<input type="hidden" name="event_member[event_id]" value="<?php the_ID(); ?>" />
					<div class="form__loading"><i class="fa fa-circle-o-notch fa-spin"></i></div>
				</div>
			</div>
		</div>
		<div class="form__notice form__notice_information notice notice_information">
			<div class="notice__message">
				<?php esc_html_e('You already has been joined to the event.', 'smarty'); ?>
			</div>
			<div class="notice__hide">&times;</div>
		</div>
		<div class="form__notice form__notice_success notice notice_success">
			<div class="notice__message">
				<?php esc_html_e('Thank you! You joined to the event.', 'smarty'); ?>
			</div>
			<div class="notice__hide">&times;</div>
		</div>
	</form>
</div>