<?php
require_once ("numero.class.php");

function mostrarFrase($num){
    echo "O número informado foi " . $num;
}

$numero = new Numero();
$numero->setNumero($_GET ['txtNumero']);
mostrarFrase($_GET ['txtNumero']);

?>