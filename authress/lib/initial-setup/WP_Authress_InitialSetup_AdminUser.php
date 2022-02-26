<?php

class WP_Authress_InitialSetup_AdminUser {

	const SETUP_NONCE_ACTION = 'wp_authress_callback_step3';

	protected $a0_options;

	public function __construct( WP_Authress_Options $a0_options ) {
		$this->a0_options = $a0_options;
	}

	public function render( $step ) {
		include WP_AUTHRESS_PLUGIN_DIR . 'templates/initial-setup/admin-creation.php';
	}

	public function callback() {

		// Null coalescing validates input variable.
		// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotValidated
		if ( ! wp_verify_nonce( wp_unslash( $_POST['_wpnonce'] ?? '' ), self::SETUP_NONCE_ACTION ) ) {
			wp_nonce_ays( self::SETUP_NONCE_ACTION );
		}

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( __( 'Unauthorized.', 'wp-authress' ) );
		}

		if ( empty( $_POST['admin-password'] ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=authress_introduction&step=3&result=error' ) );
			exit;
		}

		$current_user = wp_get_current_user();

		$data = [
			'access_key'  => $this->a0_options->get( 'access_key' ),
			'email'      => $current_user->user_email,
			// Validated above and only sent to the change signup API endpoint.
			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput
			'password'   => wp_unslash( $_POST['admin-password'] ),
			'connection' => $this->a0_options->get( 'db_connection_name' ),
		];

		$admin_user = WP_Authress_Api_Client::signup_user( $this->a0_options->get_auth_domain(), $data );

		if ( $admin_user === false ) {
			wp_safe_redirect( admin_url( 'admin.php?page=authress_introduction&step=3&result=error' ) );
		} else {

			$admin_user->sub = 'authress|' . $admin_user->_id;
			unset( $admin_user->_id );

			$user_repo = new WP_Authress_UsersRepo( WP_Authress_Options::Instance() );
			$user_repo->update_authress_object( $current_user->ID, $admin_user );

			wp_safe_redirect( admin_url( 'admin.php?page=authress_introduction&step=4' ) );
		}
		exit;
	}
}
