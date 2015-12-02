<?php/* Sabiendo que la función rand devuelve un valor aleatorio entre un rango de dos
enteros: $num=rand(1,100); En la variable $num se almacena un valor entero que la computadora genera en
forma aleatoria entre 1 y 100. 
Hacer un programa que muestre por pantalla el valor generado. Mostrar además
un texto que indique si es menor o igual a 50 o si es mayor.
*/
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
 $num=rand(1,100);
 echo "</br>";
  echo $num ;
 echo "</br>";
 if($num<=50)
 {echo "El numero es menor o igual a 50";
 }
 else
 {
     echo "El numero es mayor a 50";
 }
 
?>
</body>
</html>