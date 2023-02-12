<?php

class Tasklist extends DB{

  
    public $user;
    public $tarea;
    public $userPosition;
    public $tareaPosition;
    public $data;

    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];
        $this->tareaPosition =  $_SESSION["tareaPosition"];
    }

    public function listAction()
    {

        $this->session();

        $this->tarea = $this->read()[$this->userPosition]['Tareas'];


        return $this->tarea[$this->tareaPosition];

    }

}
?>