<?php
/*
1.4 Definir tres variables enteras. Luego definir un string que incorpore las tres
variables y las sustituya en tiempo de ejecución.
AYUDA: Recordar que una variable se sustituye cuando el string está encerrado por comillas dobles, por ejemplo: $precio=450;
echo "El ordenador tiene un precio de $precio euros";
¿Crees que alternativamente se podría resolver con el operador de concatenación “.” ? Compruebalo y razona la respuesta
*/
?>
<html>
    <head><title>ejerciciosResueltos1.4</title></head>
    <body>
        <?php
        echo "<hr/>";
echo "<h3>EJERCICIO DE EJEMPLO APUNTES </h3>";
 $nota1=10;
 $nota2=7;
 $nota3=8;
 echo "Juan aprobó la materia con las notas $nota1, $nota2 y $nota3"; 
        echo "<hr/>";
        echo "<hr/>";
        echo "<h3>EJERCICIO propio </h3>";
        $precio=450;
echo "El ordenador tiene un precio de $precio euros";
echo "<hr/>";
$torre=(int) 300;
$monitor=(int) 200;
echo "el precio de la torre $torre y por el monitor $monitor , mietras que el pack cuesta el total de:";
echo $monitor + $torre ;

        
        
        ?>
        
    </body>
</html>