<?php
/** op-unit-login:/config.php
 *
 * Default config file.
 *
 * @created    2023-01-30
 * @license    Apache-2.0
 * @package    op-unit-login
 * @copyright  (C) 2023 Tomoaki Nagahara
 */

//	...
$login = [
	//	The URL to redirect to after a successful login.
	'transfer' => null,
];

//	...
$logout = [
	//	The URL to redirect to after a successful logout.
	'transfer' => null,
];

//	...
$database = [
	'driver' => 'sqlite',
	'path'   => 'Login.sqlite3',
];

//	...
return [
	'login'  => $login,
	'logout' => $logout,
	'database' => $database,
];
