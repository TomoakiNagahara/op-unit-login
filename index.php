<?php
/**	op-unit-login:/index.php
 *
 * @created     2023-01-30
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2023 Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/**	Include
 *
 */
require_once(__DIR__.'/Login.class.php');

/**	Include default webpack
 *
 */
OP()->Unit()->WebPack()->Auto(__DIR__.'/webpack/');
