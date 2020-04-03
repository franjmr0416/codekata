<?php
    include "nav.html";
    include "conexionbd.php";
   
    $cursor = $coleccion->find(['problema'=>$_GET['ejercicio']]);

    foreach($cursor as $documento){
        $titulo=$documento['problema'];
        $categoria=$documento['categoria'];
        $descripcion=$documento['descripcion'];
        $pruebas=$documento['pruebas'];
        $respuesta=$documento['respuesta'];
    }
    
    $result="";
    $result.='<div class="card" style="width: 50%; margin: 20px;">
                <div class="card-body">
                    <h5 class="card-title" name="titulo">'.$titulo.'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Categoria: '.$categoria.'</h6>
                    <p class="card-text">'.$descripcion.'</p>
                    <p class="card-text">'.$pruebas.'</p>
                    <p class="card-text">'.$respuesta.'</p>
                    <a href="ejercicio.php?ejercicio='.$titulo.'" class="card-link" >Ocultar</a>
                </div>
            </div>';
    echo $result;
    

    $btnBack ='<a href="home.php" class="btn btn-secondary" style="width: 18rem; margin: 20px;">Regresar a categorias</a>';
    echo $btnBack;
?>
   </body>
</html>