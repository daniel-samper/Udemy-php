<h1>Bienvenido a mi web con MVC</h1>
<?php 
require_once 'controllers/usuario.php';

if(isset($_GET['controller']) && class_exists($_GET['controller'])):
    $nombre_controlador = $_GET['controller'];
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action'])):
        $action = $_GET['action'];
        $controlador->$action();

    else:
        echo "La página que buscas no existe";
    endif;
    
else:
    echo "La página que buscas no existe";
endif;




    