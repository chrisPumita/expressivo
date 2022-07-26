<?php
if (isset($_POST['email']))
{
    include_once "MAIN.php";
    $email      = MAIN::limpiar_cadena($_POST['email']);

    include_once "./enviaMail.php";

    if(enviaCorreoNewsLetter($email)){
        $mje =  "Gracias por registrarte, estamos preparando las mejores ofertas para ti ";
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




