<?php
/**	op-unit-login:/ci/SignIn/isLoggedin.php
 *
 * @created     2025-05-05
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci UNIT\CI\CI_Config */

//	isCredentials
$method = 'isCredentials';
$args   = [
	'nickname',
	'pass1234',
];
$result = false;
$ci->Set($method, $result, $args);
