<?php

class TaskEdit extends DB
{

    public $tarea = array();
    public $userPosition; 
    public $titulo = "";
    public $descripcion;
    public $estado;
    public $hora_inicio;
    public $hora_fin;
    public $gatetask = 0;
    public $contadortask = -1;
    public $tareas = array();


    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }

    function taskcount($titulo)
    {

        $tasks =  $this->read()[$this->userPosition]['tareas'];

        foreach($this->tasks as $task)
        {

            if($this->gatetask != 1){ 

                $this->contadortask++;
                
                if ($task['titulo'] === $titulo){

                    $this->userResult = true;
                    $this->gate = 1;
                    
                }else{

                    $this->gate  = 0;

                }      
            }
        }
    }


    function addTask($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {

        $this->session();
        $this->taskcount();
       
        $decoded_json = $this->read();
        
        
        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        $decoded_json[$this->userPosition]['tareas'][$this->contadortask] = $tarea;

        $write = $this->write($decoded_json);
        
        header('Location:/web/home');

    }

}

?>