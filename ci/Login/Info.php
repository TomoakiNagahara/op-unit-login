<?php
/**	op-unit-login:/ci/Login/Info.php
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

//	Info
$method = 'Info';
$args   =  null;
$result = [
	'ai'      => null,
	'account' => null,
];
$ci->Set($method, $result, $args);
