<?php
    include "nav.html";
    include "conexionbd.php";

    $cursor = $coleccion->find(['problema'=>$_POST['problema']]);
    $titulo="";

    foreach($cursor as $documento){
        $titulo=$documento['problema'];
    }

    if($titulo==$_POST['problema']){

        $updateDescripcion = $db->problemas->updateOne(
            ['problema' => "$_POST[problema]"],
            [
                '$set' => ['descripcion' => "$_POST[descripcion]"]
                
            ]
        );
        $updatePruebas = $db->problemas->updateOne(
            ['problema' => "$_POST[problema]"],
            [
                '$set' => ['pruebas' => "$_POST[pruebas]"]
                
            ]
        );
        $updateResultado = $db->problemas->updateOne(
            ['problema' => "$_POST[problema]"],
            [
                '$set' => ['respuesta' => "$_POST[respuesta]"]
                
            ]
        );

        echo '<div class="alert alert-success" role="alert">
                Se actualizo correctamente!
            </div>
            <div class="row align-items-center justify-content-center" >
                <img src="img/done.png" alt="DONE" style="width: 400px; ">
                
            </div>';
    }else{
        echo '<div class="alert alert-warning" role="alert">
                Algo salio mal!
            </div>
            <div class="row align-items-center justify-content-center" >
                    <img src="img/fail.png" alt="DONE" style="width: 300px; ">
            </div>';
    }
    $btnBack ='<div class="row align-items-center justify-content-center">
                    <a href="admin.php" class="btn btn-secondary" style="width: 18rem; margin: 20px;">Volver</a>';
    echo $btnBack;
?>