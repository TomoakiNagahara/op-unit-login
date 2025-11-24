<?php
/**	op-unit-login:/SignIn.class.php
 *
 * @created    2025-06-07
 * @version    1.0
 * @package    op-unit-login
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All rights reserved.
 */

/**	Namespace
 *
 */
namespace OP\UNIT\LOGIN;

/**	Use
 *
 */
use OP\OP_CORE;
use OP\OP_CI;
use OP\OP_TEMPLATE;
use OP\IF_UNIT;

/**	Login
 *
 * @created    2025-06-07
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

	/** Form
	 *
	 * @created    2025-06-07
	 * @return     \OP\IF_FORM
	 */
	static function Form() : \OP\IF_FORM
	{
		/* @var $_form \OP\IF_FORM */
		static $_form = null;

		//	Instantiate the form only once.
		if( $_form === null ){
			$_form = OP()->Unit()->Instantiate('Form');
			$_form -> Config(__DIR__.'/config/login.php');
		}

		//	Return the IF_FORM.
		return $_form;
	}

	/** QQL
	 *
	 * @created    2025-06-07
	 * @return     \OP\IF_QQL
	 */
	static function QQL() : \OP\IF_QQL
	{
		/* @var $_qql \OP\IF_QQL */
		static $_qql = null;

		//	Instantiate the unit only once.
		if( $_qql === null ){
			$_qql = OP()->Unit('QQL');
			$_qql->Open('Login.sqlite3');
		}

		//	Return the IF_QQL.
		return $_qql;
	}

	/** Check if the credentials are valid.
	 *
	 * @created    2025-06-07
	 * @param      string      $account
	 * @param      string      $password
	 * @return     bool
	 */
	static function isCredentials(string $account='', string $password='') : bool
	{
		//	...
		$qql = self::QQL();

		//	...
		$password = md5($password);

		//	...
		$record = $qql->Get(" t_register.account = {$account} ");

		//	...
		return ($record['password'] ?? null) === $password;
	}
}
