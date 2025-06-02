<?php
/** op-unit-login:/config/login.php
 *
 * @created     2025-06-02
 * @version     1.0
 * @package     op-unit-login
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

//	...
$form = [
	'name' => 'login',
];

//	...
$account = [
	'name'  => 'account',
	'type'  => 'text',
	'placeholder' => 'Your account name',
	'validate' => 'required, english',
	'errors' => [
		'required' => 'Please enter your account name.',
		'english'  => 'Please use English for the account name.',
	],
];

//	...
$password = [
	'name'  => 'password',
	'type'  => 'password',
	'placeholder' => 'Login password',
	'validate' => 'required, short(8)',
	'errors' => [
		'required' => 'Please enter your login password.',
		'short'    => 'Please make the password at least 8 characters long.',
	],
];

//	...
$button = [
	'name'  => 'button',
	'type'  => 'button',
	'value' => ' Login ',
];

//	...
$form['input'] = [
	$account,
	$password,
	$button,
];

//	...
return $form;
