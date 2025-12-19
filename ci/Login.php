<?php
/**	op-unit-login:/ci/Login.php
 *
 * @created     2023-01-30
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2023 Tomoaki Nagahara
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
include_once('index.php');

/* @var $ci UNIT\CI\CI_Config */
$ci = OP::Unit('CI')::Config();

//	...
foreach( glob('Login/*.php') as $file_path ){
	require_once($file_path);
}

//	...
return $ci->Get();
