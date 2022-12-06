<?php

class connection
{

    static public function connect()
    {

        try {
            $conn = new PDO("mysql:host=localhost;dbname=ciga_edbar", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
}

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "ciga_edbar";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection Failed!";
    exit();
}
