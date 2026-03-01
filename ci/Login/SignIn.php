<?php
/**	op-unit-login:/ci/Login/SignIn.php
 *
 * @created     2026-01-17
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

//	...
$account  = 'CI';
$password = 'password';
$prepare= function() use ( $account, $password ){
	OP()->Unit()->Login()->SignUp($account, $password);
};
$args   = [$account, $password];
$result =  true;
$ci->Set($method, $result, $args, prepare: $prepare);
