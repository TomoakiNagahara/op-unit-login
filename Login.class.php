<?php
/** op-unit-login:/Login.class.php
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** namespace
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

/** Login
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */
class Login implements IF_UNIT
{
	use OP_CORE, OP_CI;
	use OP_SESSION, OP_TEMPLATE;

	/** Automatically
	 *
	 * @created     2025-06-02
	 */
	static function Auto()
	{
		//	...
		if( self::isLoggedin() ){
			//	...
			D('Already logged in.');
		}else{
			D('Not yet logged in.');
			//	...
			if(!isset($_GET['register']) ){
				D( 'sign-in' );
				require_once(__DIR__.'/SignIn.class.php');
				LOGIN\SignIn::Auto();
			}else{
				D( 'sign-up' );
				require_once(__DIR__.'/SignUp.class.php');
				LOGIN\SignUp::Auto();
			}
		}
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
		self::Session('isLoggedin', false);

		//	...
		require_once(__DIR__.'/SignIn.class.php');
		LOGIN\SignIn::Form()->Clear();
	}
}
