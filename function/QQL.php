<?php
/**	op-unit-login:/function/QQL.php
 *
 * @created     2026-02-05
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP\UNIT\LOGIN;

/**	Return QQL instance.
 *
 * @created    2025-06-07
 * @return    \OP\IF_QQL
 */
function QQL() : \OP\IF_QQL
{
	/* @var $_qql \OP\IF_QQL */
	static $_qql = null;

	//	Instantiate the unit only once.
	if( $_qql === null ){
		$_qql = OP()->Unit()->Instantiate('QQL');
		$file = 'Login.sqlite3';
		$path = OP()->isCI() ? "ci/{$file}" : $file;
		$path = OP()->Path("asset:/db/{$path}");
		//	...
		if(!$_qql->Open("sqlite:$path") ){
			throw new \Exception("Database connection error.");
		}
	}

	//	Return the IF_QQL.
	return $_qql;
}
