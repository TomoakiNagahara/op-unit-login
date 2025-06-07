<?php
/** op-unit-login:/SignIn.class.php
 *
 * @created    2025-06-07
 * @version    1.0
 * @package    op-unit-login
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\UNIT\LOGIN;

/** use
 *
 */
use OP\OP_CORE;
use OP\OP_CI;
use OP\OP_TEMPLATE;
use OP\IF_UNIT;

/** Login
 *
 * @created    2025-06-07
 * @version    1.0
 * @package    op-unit-login
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */
class SignIn implements IF_UNIT
{
	/** used traits
	 *
	 */
	use OP_CORE, OP_CI;
	use OP_TEMPLATE;

	/** Automatically
	 *
	 * @created    2025-06-07
	 */
	static function Auto()
	{
		//	...
		$form = self::Form();

		//	Check if the form validation.
		if( $form->isValidate() ){

			//	Submit value is valid.
			$account  = $form->GetValue('account');
			$password = $form->GetValue('password');

			//	Check if the credentials are valid.
			if( self::isCredentials($account, $password) ){

				//	Since auth was successful, store the auth flag in the session.
				\OP\UNIT\Login::Session('isLoggedin', true);

				//	Failed to validate.
				self::Template('login/success.phtml');

				//	...
				return;
			}

			//	Failed to validate.
			$message = 'Either the account is not registered or the password is incorrect.';
		}

		//	Failed to validate.
		self::Template('login/form.phtml', ['form' => $form, 'message' => $message ?? null]);
	}
}
