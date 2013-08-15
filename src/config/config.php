<?php
return array(
	/*
	|--------------------------------------------------------------------------
	| Default title
	|--------------------------------------------------------------------------
	|
	| Type your default title for your website.
	| This title will be prepended when there are more titles to concatenate with.
	|
	*/
	'default_title' => 'Design it &amp; Code it',

	/*
	|--------------------------------------------------------------------------
	| Default title when empty
	|--------------------------------------------------------------------------
	|
	| This will be used when therer is no other title.
	| Mainly used for front page of your website.
	|
	*/
	'default_title_when_empty' => 'Design it &amp; Code it',

	/*
	|--------------------------------------------------------------------------
	| Delimiter
	|--------------------------------------------------------------------------
	|
	| Titles will be concatenated using this delimiter.
	|
	*/
	'delimiter' => ' :: ',

	/*
	|--------------------------------------------------------------------------
	| Concatenating direction
	|--------------------------------------------------------------------------
	|
	| Set to TRUE if you want to display your titles in reverse order.
	|
	| Title::put('Home');
	| Title::put('Dashboard');
	|
	| when set to TRUE, Title::get() will returns:
	|
	| 	Dashboard :: Home
	|
	| Otherwise,
	|
	|	Home :: Dashboard
	*/
	'reverse' => TRUE,
);
