<?php
/**	op-unit-login:/Login.class.php
 *
 * @created     2023-01-30
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
 */

/**	Namespace
 *
 */
namespace OP\UNIT;

/** use
 *
 */
use OP\IF_UNIT;
use OP\OP_CORE;
use OP\OP_CI;
use OP\OP_SESSION;
use OP\OP_TEMPLATE;

/**	Login
 *
 * @created     2023-01-30
 */
class Login implements IF_UNIT
{
	use OP_CORE, OP_CI;
	use OP_SESSION, OP_TEMPLATE;

	/**	Automatically
	 *
	 * @created     2025-06-02
	 */
	static function Auto()
	{
		//	Get SmartURL arguments.
		$args = OP()->Unit()->Router()->Args();

		//	Switch process by args.
		switch( $args[0] ?? null ){
			case 'logout':
				self::Logout();
				break;

			case 'register':
				self::SignUp();
				break;

			default:
				if( self::isLoggedin() ){
					//	...
					D('Already logged in.');
				}else{
					self::SignIn();
				}
			break;
		};
	}

	/** Return login status.
	 *
	 * @created     2025-06-02
	 * @return      bool
	 */
	static function isLoggedin() : ?bool
	{
		return self::Session('isLoggedin');
	}

	/** Log in information.
	 *
	 * @created     2025-06-04
	 */
	static function Info()
	{
		return [
			'ai'      => self::Session('ai'),
			'account' => self::Session('account'),
		];
	}

	/** Logout
	 *
	 * @created     2025-06-04
	 */
	static function Logout()
	{
		//	...
		self::Session('ai',          null);
		self::Session('account',     null);
		self::Session('isLoggedin', false);

		//	...
		require_once(__DIR__.'/SignIn.class.php');
		LOGIN\SignIn::Form()->Clear();

		//	...
		return self::Session('isLoggedin') === false ? true : false ;
	}

	/**	Sign in is login.
	 *
	 * @created     2026-01-17
	 */
	static function SignIn()
	{
		if( OP()->isCI() ){
			return true;
		}
		require_once(__DIR__.'/SignIn.class.php');
		LOGIN\SignIn::Auto();
	}

	/**	Sign in is register account.
	 *
	 * @created     2026-01-17
	 */
	static function SignUp()
	{
		if( OP()->isCI() ){
			return true;
		}
		require_once(__DIR__.'/SignUp.class.php');
		LOGIN\SignUp::Auto();
	}
}
