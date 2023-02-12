<?php

class HomeController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "hello from the world";
		
	}

	public function homeAction()
	{
	
		$object = new Home();
		
		//$value123 = $object->homeAction();

		//$value = $object->homeAction();

		$this->view->_data = $object->homeAction();
		
	}

	/*
	public function __getAction($key)
	{
		$key = "tareas";
	}



	*/
	
	public function checkAction()
	{
		
	}

	
}