<?php
    include('class_hello.php');
    class meteo extends hello{
        public function temps(){
            $meteo = "Il fait tres beau aujourdh'ui";

            return $meteo;
        }
    }

?>