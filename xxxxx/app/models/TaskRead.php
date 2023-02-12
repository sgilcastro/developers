<?php

class TaskRead extends DB{

  
    public $user;
    public $tarea;
    public $userPosition;
    public $taskPosition;
    public $taskRead;
    public $data;

    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }

    public function sessionTask()
    {

        $this->taskPosition =  $_GET['item'];

    }

    public function taskReadAction()
    {

        $this->session();
        $this->sessionTask();

        $this->taskRead = $this->read()[$this->userPosition]['tareas'][$this->taskPosition];


        return $this->taskRead;

    }

}
?>
