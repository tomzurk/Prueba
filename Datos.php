<?php

$usuarioValido = "revolucion";
$passwordValido = "movil";
$passwordEnviado1 = $passwordEnviado1

$usuarioEnviado = $_GET[‘usuario‘];
$passwordEnviado = $_GET[‘password‘];
$passwordEnviado1 = $_GET[‘password1‘];

$resultados = array();
$resultados[“hora”] = time();
$resultados[“generador”] = “generado en revolucion.mobi”;


if( $usuarioEnviado == $usuarioValido && $passwordEnviado == $passwordValido ){
$resultados[“respuesta”] = “Validacion Correcta”;
$resultados[“validacion”] = “ok”;
}else{
$resultados[“respuesta”] = “Usuario y password incorrectos”;
$resultados[“validacion”] = “error”;
}

if( $passwordEnviado == $passwordValido && $passwordEnviado1 == $passwordEnviado1 ){
$resultados[“respuesta”] = “Contraseña Cambiada”;
$resultados[“validacion”] = “ok”;
}else{
$resultados[“respuesta”] = “Contraseña no coinsiden”;
$resultados[“validacion”] = “error”;
}

$resultadosJson = json_encode($resultados);
echo $resultadosJson;

archivoValidacion = “http://revolucion.mobi/ejemplos/phonegap/envioFormulario/validacion_de_datos.php?jsoncallback=?“

echo $_GET[‘jsoncallback’] . ‘(‘ . $resultadosJson . ‘);';


?>