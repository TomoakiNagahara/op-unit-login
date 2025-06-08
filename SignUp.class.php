<?php
/** op-unit-login:/SignUp.class.php
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
class SignUp implements IF_UNIT
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

		//	Check if input is valid.
		if( $form->isValidate() ){

			//	Get the submit button value.
			if( $form->GetValue('button') === 'Register' ){

				//	Get the account and password values.
				$account  = $form -> GetValue('account');
				$password = $form -> GetValue('password');

				//	Do the registration.
				$file =  self::Register($account, $password) ? 'success':'failure';
				$form -> Clear();
				self::Template("register/{$file}.phtml");
				return;
			}

			//	Display the confirmation form.
			self::Template('register/confirm.phtml', ['form'=>$form]);
			return;
		}

		//	...
		self::Template('register/form.phtml', ['form'=>$form]);
	}
}
