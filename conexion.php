<?php


//$mysqli = new mysqli('aca va el servidor', 'aca va el usuario', 'aca va la contraseña', 'aca va el nombre de la bd');
    $mysqli = new mysqli('localhost', 'root', '', 'bi_4pol0');
    

    if($mysqli->connect_error){
        die('Error al conectar la bd'. $mysqli->connect_error);
    }


    
// $host="localhost";
// $bd="sitio";
// $usuario="root";
// $contrasenia="";

// try {
//     $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);

// } catch ( Exception $ex) {
//     echo $ex->getMessage();
// }


    // class Database{

    //     private $hostname = "bn5ukqlntyr71a5vrsn5-mysql.services.clever-cloud.com";
    //     private $database = "bn5ukqlntyr71a5vrsn5";
    //     private $username = "u01xu4jjlcxmpcyq";
    //     private $password = "lQgzzHubM9HEXKvQkjU2";
    //     private $charset = "utf8";

    //     function conectar(){
    //         try{
    //             $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
    //             $options = [
    //                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //                 PDO::ATTR_EMULATE_PREPARES => false
    //             ];

    //             $pdo = new PDO($conexion, $this->username, $this->password, $options);
    //             return $pdo;
    //         }catch(PDOException $e){
    //             echo 'Error conexion: '.$e;
    //             exit;
    //         }
    //     }
    // }
?>