<?php
/** op-unit-login:/Login.class.php
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\UNIT;

/** use
 *
 */
use OP\IF_UNIT;
use OP\OP_CORE;
use OP\OP_CI;
use OP\OP_SESSION;
use OP\OP_TEMPLATE;

/** Login
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */
class Login implements IF_UNIT
{
	use OP_CORE, OP_CI;
	use OP_SESSION, OP_TEMPLATE;
}
