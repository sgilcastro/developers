<?php


    class DB{

    
        public $decoded_json;

            public function read(){

                //Obtengo los datos de la bbdd del archivo json y lo decodifico como un array
                $this->decoded_json = json_decode(file_get_contents(__DIR__.'/DB.json'), true);
                return $this->decoded_json;

            }

            public function write($decoded_json){

                $json = json_encode($decoded_json,JSON_PRETTY_PRINT|JSON_PRESERVE_ZERO_FRACTION);
                $bytes = file_put_contents(__DIR__.'/DB.json', $json);

                return $bytes;
              
            }







    }

?>



