<?php
/** op-unit-login:/config/register.php
 *
 * @created     2025-06-04
 * @license     Apache-2.0
 * @package     op-unit-login
 * @copyright   (C) 2025 Tomoaki Nagahara
 */

//	...
$form = [
	'name' => 'login',
	'name' => 'register',
];

//	...
$account = [
	'name'  => 'account',
	'type'  => 'text',
	'placeholder' => 'Your account name',
	'validate' => 'required, username',
	'errors' => [
		'required' => 'Please enter your account name.',
		'username' => 'Unsupported characters were entered: $value',
	],
];

//	...
$password = [
	'name'  => 'password',
	'type'  => 'password',
	'placeholder' => 'Login password',
	'validate' => 'required, password, short(8)',
	'errors' => [
		'required' => 'Please enter your login password.',
		'password' => 'Unsupported characters were entered: $value',
		'short'    => 'Please make the password at least 8 characters long.',
	],
];

//	...
$confirm = [
	'name'  => 'confirm',
	'type'  => 'password',
	'label' => 'Confirm password',
	'placeholder' => 'Confirm login password',
	'validate' => 'required, password, short(8), confirm(password)',
	'errors' => [
		'required' => 'Please enter your confirmation login password.',
		'password' => 'Unsupported characters were entered: $value',
		'short'    => 'Please make the password at least 8 characters long.',
		'confirm'  => 'The confirm passwords do not match.',
	],
];

//	...
$button = [
	'name'  => 'button',
	'type'  => 'button',
	'value' => ' Confirm ',
];

//	...
$form['input'] = [
	$account,
	$password,
	$confirm,
	$button,
];

//	...
return $form;
