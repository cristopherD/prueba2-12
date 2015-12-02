<?php // 1.3 Definir una variable de cada tipo: integer, double, string y boolean. Luego
// imprimirlas en la página, una por línea.
?>
<html>
    <head>
        <title>ejercicio 1.3  </title>
    </head>
    <body>
        <?php
                
        $c=5;
        $d=2.4;
        $result=(int) $c * $d;
        $doble=(real) $c * $d ;
        echo "$c * $d";
        echo "</br>";
        echo "el resultado INT es $result";
        echo"<hr/>";
        echo "el resultado con DOUBLE es $doble";
        echo"<hr/>";
        echo "esto es string";
        echo"<br/>";
       $nombre="juan";
               echo $nombre;
           echo "<hr/>";
        $existe=TRUE;
           echo "variable boolean:  ";
           echo $existe;
            echo"<hr/>";
           ?>
        
    </body>
</html>