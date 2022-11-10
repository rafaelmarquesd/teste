<?php

$host = "107.180.57.185";
$usuario = "dz_dev";
$senha = "p?%3DY?#*LBW";
$bd = "dz_dev_test";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>