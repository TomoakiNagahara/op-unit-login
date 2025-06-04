<?php
/** op-unit-login:/template/login.php
 *
 * @created     2025-06-04
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
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
