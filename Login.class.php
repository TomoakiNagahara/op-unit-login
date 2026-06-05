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

/**	Use
 *
 */
use OP\OP_CORE;
use OP\OP_CI;
use OP\OP_SESSION;
use OP\OP_TEMPLATE;
use OP\IF_LOGIN;

/**	Login
 *
 * @created     2023-01-30
 */
class Login implements IF_LOGIN
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
				self::SignUp('','');
				break;

			default:
				if( self::isLoggedin() ){
					//	...
					D('Already logged in.');
				}else{
					self::SignIn('','');
				}
			break;
		};
	}

	/** Return login status.
	 *
	 * @created     2025-06-02
	 * @return      bool
	 */
	static function isLoggedin() : bool
	{
		return self::Session('ai') ? true: false;
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

	/**	Return Auto increment id.
	 *
	 * @created     2026-02-03
	 * @return      int|false
	 */
	static function AI() : int | false
	{
		//	...
		if(!$ai = self::Session('ai') ?? false){
			//	...
			if( OP()->isCI() ){
				$ai = 1;
			}
		}

		//	...
		return $ai ?? false;
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

		//	This will result in an error that depends on the Form UNIT implementation.
		if(!OP()->isCI() ){
		require_once(__DIR__.'/SignIn.class.php');
		LOGIN\SignIn::Form()->Clear();
		}

		//	...
		return empty(self::Session('ai')) ? true : false ;
	}

	/**	Sign in is login.
	 *
	 * @created     2026-01-17
	 */
	static function SignIn( string $account, string $password ) : bool
	{
		//	...
		require_once(__DIR__.'/SignIn.class.php');

		//	...
		if( $account and $password ){
			return LOGIN\SignIn::isCredentials($account, $password);
		}

		//	...
		return LOGIN\SignIn::Auto() ? true: false;
	}

	/**	Sign in is register account.
	 *
	 * @created     2026-01-17
	 */
	static function SignUp( string $account, string $password ) : bool
	{
		//	...
		require_once(__DIR__.'/SignUp.class.php');

		//	...
		if( $account and $password ){
			return LOGIN\SignUp::Register($account, $password);
		}

		//	...
		return LOGIN\SignUp::Auto() ? true: false;
	}

	/**	Log out
	 *
	 * @created     2026-01-20
	 * @return      boolean
	 */
	static function SignOut() : bool
	{
		return self::Logout();
	}
}
