<?php
if (isset($_POST['name']) ||
    isset($_POST['email']) ||
    isset($_POST['institucion']) ||
    isset($_POST['telefono'])||
    isset($_POST['terms']))
{
    include_once "MAIN.php";
    $name       = MAIN::limpiar_cadena($_POST['name']);
    $email      = MAIN::limpiar_cadena($_POST['email']);
    $institucion= MAIN::limpiar_cadena($_POST['institucion']);
    $telefono   = MAIN::limpiar_cadena($_POST['telefono']);
    $telefono2  = MAIN::limpiar_cadena($_POST['telefono2']);
    $comentario = MAIN::limpiar_cadena($_POST['comentario']);

    $opciones = array(
        isset($_POST['option_1']) ? $_POST['option_1'] : "",
        isset($_POST['option_2']) ? $_POST['option_2'] : "",
        isset($_POST['option_3']) ? $_POST['option_3'] : "",
        isset($_POST['option_4']) ? $_POST['option_4'] : "",
        isset($_POST['option_5']) ? $_POST['option_5'] : ""
    );

    include_once "./enviaMail.php";


    if(enviaCorreo($name,$email,$institucion,$telefono,$telefono2,$comentario,$opciones,false))
        if (enviaCorreo($name,$email,$institucion,$telefono,$telefono2,$comentario,$opciones,true)){
            $mje =  "Hemos recibido sus datos, en breve uno de nuestros agentes se pondrá en contacto con usted al correo ".$email;
            $value = 1;
        }
    else{
        $mje =  "Ocurrio un error interno en el servidod.<br> Vuelva a intentarlo";
        $value = 0;
    }
}
else{
    $mje = "Los datos no estan completos. Intentelo de nuevo";
    $value = 0;
}

$rest = array(
    "mensaje" => $mje,
    "response" => $value,
);

echo json_encode($rest);




