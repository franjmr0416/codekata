<?php 
    require_once __DIR__ . "/vendor/autoload.php";
    $client = new MongoDB\Client(
    'mongodb+srv://spider:casio@cluster0-nq8wr.mongodb.net/test?retryWrites=true&w=majority');
    $db = $client->codekata;
    /*
    if($client){
        echo "Conexion exitosa"."<br>";
    }
    if($db){
        echo "Base de datos seleccionada"."<br>";
    }
    */
    $coleccion = $db->problemas; 
    /*$cursor = $coleccion->find(['categoria'=>'Logic 1']);
    #$cursor=$db->problemas->find();
    
    #$documento = array();
    foreach($cursor as $documento){
        echo $documento['problema']."<br>";
        echo $documento['categoria']."<br>";
        echo $documento['descripcion']."<br>";
        echo $documento['pruebas']."<br>";
        #echo $documento['respuesta']."<br>";
    
    }
    */

?>