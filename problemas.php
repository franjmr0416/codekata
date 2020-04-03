<?php
    include "nav.html";
    include "conexionbd.php";
  
    
    $cat="";
    switch($_GET['categoria']){

        case 'Logic1':
            $cat="Logic 1";
        break;

        case 'Logic2':
            $cat ="Logic 2";
        break;

        case 'Map2':
            $cat ="Map 2";
        break;

        case 'String3':
            $cat ="String 3";
        break;

        case 'Array3':
            $cat ="Array 3";
        break;
    }

    $cursor = $coleccion->find(['categoria'=>$cat]);
    



    $result="";
    $result.='<h4 style="margin: 20px;">Retos</h4>';
    foreach($cursor as $documento){
        
        $titulo=$documento['problema'];
        
        $result.='<div class="card" style="width: 18rem; margin: 20px;">
                <div class="card-body">
                    <h5 class="card-title">'.$titulo.'</h5>
                    <a href="ejercicio.php?ejercicio='.$titulo.'" class="card-link">Probar</a>
                </div>
                
            </div>';
    
    }
    echo $result;
    $btnBack ='<a href="home.php" class="btn btn-secondary" style="width: 18rem; margin: 20px;">Regresar a categorias</a>';
    echo $btnBack;
    
    
    
    

     
    
?>
    </body>
</html>