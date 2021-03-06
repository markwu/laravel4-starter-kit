<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Path where Opauth is accessed.
	|--------------------------------------------------------------------------
	|
	| Begins and ends with /
	| eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
	| if Opauth is reached via http://auth.example.org/, path is '/'
	|
	*/

	'path' => '/social/auth/',

	/*
	|--------------------------------------------------------------------------
	| Callback URLs
	|--------------------------------------------------------------------------
	|
	| redirected to after authentication, successful or otherwise
	|
	*/

	'callback_url' => URL::to('social/callback'),

	'callback_transport' => 'session',

	/*
	|--------------------------------------------------------------------------
	|
	|--------------------------------------------------------------------------
	|
	| A random string used for signing of $auth response.
	|
	*/

	'security_salt' => 'Enter Random string here',

	/*
	|--------------------------------------------------------------------------
	| Strategies
	|--------------------------------------------------------------------------
	|
	| Define here all the Opauth strategies you want to use.
	|
	*/
	'Strategy' => array(

		'Facebook' => array(
			'app_id'     => 'APP ID',
			'app_secret' => 'APP Secret',
			'scope'      => 'email,user_birthday,user_location',
		),

	),

);
