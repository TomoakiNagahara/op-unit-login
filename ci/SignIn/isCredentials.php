<?php
/**	op-unit-login:/ci/SignIn/isCredentials.php
 *
 * @created     2025-05-05
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
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
