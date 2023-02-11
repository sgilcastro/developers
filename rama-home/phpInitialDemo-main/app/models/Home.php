<?php

class Home extends DB{

  
    public $user;
    public $tarea;
    public $userPosition;
    public $data;

    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }

    public function homeAction()
    {

        $this->session();

        $this->user = $this->read()[$this->userPosition];


        return $this->user["tareas"];

    }

}
?>


	
