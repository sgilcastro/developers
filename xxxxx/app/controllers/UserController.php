<?php

class UserController extends ApplicationController
{
	public function indexAction()
	{

		$user = new UserRead;
		$this->view->_user = $user->userReadAction();

	}

	public function userModifyAction()
	{

		$name = $_POST['newname'];
		$surname = $_POST['newsurname'];
		$userName = $_POST['newusername'];
		$email = $_POST['newemail'];
		$pw = $_POST['newpasword'];


		$modify = new UserModify();
		$modify->UserModify($name , $surname, $userName, $email, $pw);


	}

	public function deleteAction()
	{

		$delete = new UserDelete();
		$delete->Delete();

		
	}


    

}