<?php

class HomeController extends ApplicationController
{
	public function homeAction()
	{

		$object = new Home;
		$this->view->_data = $object->homeAction();
		
	}
	
	public function checkAction()
	{
		$this->view->message =  "hello from test::check";
	}
}