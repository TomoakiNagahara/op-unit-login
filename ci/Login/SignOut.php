<?php
/**	op-unit-login:/ci/Login/SignUp.php
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
$args   = null;
$result = true;
$ci->Set($method, $result, $args);
