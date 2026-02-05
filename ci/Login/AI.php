<?php
/**	op-unit-login:/ci/Login/AI.php
 *
 * @created     2026-02-09
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
$args   =  null;
$result =  false;
$ci->Set($method, $result, $args);
