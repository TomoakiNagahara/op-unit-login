<?php
/**	op-unit-login:/admin/account.php
 *
 * @created    2025-12-09
 * @license    Apache-2.0
 * @package    op-unit-login
 * @copyright  (C) 2025 Tomoaki Nagahara
 */

//	...
if(!OP()->Unit()->QQL()->Open('sqlite:'.OP()->Path('asset:/db/Login.sqlite3')) ){
	return;
}

//	...
$record = OP()->Unit()->QQL()->Get(' t_register.ai > 0 ', limit:-1);
OP()->Unit()->Html()->Record($record);
