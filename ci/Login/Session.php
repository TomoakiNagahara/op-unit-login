<?php
/**	op-unit-login:/ci/Login/Session.php
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

//	Session
$method = 'Session';
$args   =  null;
$result = [
	'isLoggedin' => false,
	'ai'         => null,
	'account'    => null,
];
$ci->Set($method, $result, $args);
