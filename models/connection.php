<?php

class connection{

    static public function connect(){

        try {
            $conn = new PDO("mysql:host=localhost;dbname=ciga_edbar", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch (PDOException $e){
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }

}

?>