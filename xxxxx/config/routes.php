<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(

	'/' => 'login#index',
	'/loginerror' => 'login#error',
	'/login' => 'login#login',
	'/signuphome' => 'signup#index',
	'/signup' => 'signup#signup',
	'/home' => 'home#home',
	'/task' => 'task#taskup',
	'/taskhome' => 'task#index',
	'/taskedithome' => 'task#edithome',
	'/taskedit' => 'task#edit',
	'/taskdelete' => 'task#delete',
	'/user' => 'user#index',
	'/modifyuser' => 'user#userModify',
	'/deleteuser' => 'user#delete',
	'/deleteuser' => 'user#delete',
	
	

// the following are just test
	'/test' => 'test#index',
	'/testa' => 'test#check',
	'/rodri' => 'rodri#index'

);

?>
