<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)):
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div';
    endif;
    return $alerta;
}


 function borrarErrores(){
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);
}