<?php
/**	op-unit-login:/index.php
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara
 * @copyright   Tomoaki Nagahara All rights reserved.
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
