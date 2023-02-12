<?php

class Taskup extends DB
{

    public $tarea = array();
    public $userPosition; //======> ¡¡¡¡¡¡OJO necesitamos recibir este dato de algun sitio!!!!!!
    public $tareas = array();

    public function session()
    {

        $this->userPosition =  $_SESSION["userPosition"];

    }
    
    function addTask($titulo, $descripcion, $estado, $hora_inicio, $hora_fin)
    {
        $this->session();
        //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
        $decoded_json = $this->read();

        //Cuento el numero de elementos del array de tareas de dentro del usuario para saber cual será la posición de la nueva tarea en el array
        $posicionFinalTarea = count($decoded_json[$this->userPosition]['tareas']);


        //Creo una array de la nueva tarea
        $tarea = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'estado' => $estado,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $hora_fin,
        );

        //Añado el array $tarea en el array decodificada $decoded_json de json, indicando la posición que irá:

        $decoded_json[$this->userPosition]['tareas'][$posicionFinalTarea] = $tarea;

        //Paso ese array a un archivo json nuevo.
        $write = $this->write($decoded_json);
        
        header('Location:/web/home');
}


}

?>