<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conexion = new mysqli('localhost', 'montoro', 'ausias', 'economia');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$valores = "";
for ($i = 2002; $i <= 2015; $i++) {
    for ($j = 1; $j <= 12; $j++) {
        if (($i < 2015) or ( $j <= 9))
            $valores .= "$i" . "M" . str_pad($j, 2, "0", STR_PAD_LEFT) . ", ";
    }
}

$sql = "SELECT $valores Provincia.id as provincias, Sectore.id as sectores "
        . "FROM temporal "
        . "LEFT JOIN Provincia ON provincias.provincia=temporal.Provincia "
        . "LEFT JOIN Sectores ON sectores.sector=temporal.Sectores ";

echo $sql, "<br>";

$resultados = $conexion->query($sql);

while ($fila = $resultados->fetch_assoc()) {
    $sql = "INSERT INTO var_ipc_mes "
            . "(anyo, mes, provincia, sector, valor) "
            . "VALUES ";
    $provincia = $fila['provincia'];
    $sector = $fila['sector'];
    for ($i = 2002; $i <= 2015; $i++) {
        for ($j = 1; $j <= 12; $j++) {
            if (($i < 2015) or ( $j <= 9)) {
                $col = $i . 'M' . str_pad($j, 2, "0", STR_PAD_LEFT);
                $valor = str_replace(',','.',$fila[$col]);
                $sql.=" ($i,$j,'$provincia',$sector, $valor), ";
            }
        }
    }
    $sql = substr($sql, 0, strlen($sql) - 2);
    echo $sql . "<br>";
    $conexion->query($sql);
}
echo "inserción realizada";
