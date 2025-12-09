<?php
/**	op-unit-login:/ci/SignUp/Register.php
 *
 * @created     2025-06-08
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
 */

/**	namespace
 *
 */
namespace OP;

/* @var $ci UNIT\CI\CI_Config */

$account  = 'ci_' . date('Y-m-d H:i:s');
$password = 'pass1234';

//	Register - positive
$method = 'Register';
$args   = [
	$account,
	$password,
];
$result =  true;
$ci->Set($method, $result, $args);

//	Register - negative : already registered
$method = 'Register';
$args   = [
	$account,
	$password,
];
$result =  false;
$ci->Set($method, $result, $args);
