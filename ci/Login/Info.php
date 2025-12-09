<?php
/**	op-unit-login:/ci/Login/Info.php
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

//	Info
$method = 'Info';
$args   =  null;
$result = [
	'ai'      => null,
	'account' => null,
];
$ci->Set($method, $result, $args);
