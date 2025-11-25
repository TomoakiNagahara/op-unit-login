<?php
/** op-unit-login:/config.php
 *
 * Default config file.
 *
 * @created    2023-01-30
 * @version    1.0
 * @package    op-unit-login
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All rights reserved.
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
return [
	'login'  => $login,
	'logout' => $logout,
];
