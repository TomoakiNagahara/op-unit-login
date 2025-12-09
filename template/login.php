<?php
/** op-unit-login:/template/login.php
 *
 * @created     2025-06-04
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
 */

//	...
$args = OP()->Router()->Args();

//	...
if( 'register' === ($args[0] ?? null) ){
	return OP()->Template('register.phtml');
}else{
	return OP()->Template('login.phtml');
}

//	...
OP()->WebPack('login.css');
