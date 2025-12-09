<?php
/** op-unit-login:/config/login.php
 *
 * @created     2025-06-02
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
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
