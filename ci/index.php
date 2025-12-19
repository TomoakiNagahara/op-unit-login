<?php
/**	op-unit-login:/ci/index.php
 *
 * @created     2025-12-19
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
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
$file = 'Login.sqlite3';
$path = OP()->Path("asset:/db/ci/{$file}");

//	...
if(!file_exists($path) ){
	mkdir( OP()->Path('asset:/db/')    );
	mkdir( OP()->Path('asset:/db/ci/') );
	copy(OP()->Path("asset:/unit/login/db/{$file}"), $path);
}
