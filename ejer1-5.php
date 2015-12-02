<?php
/*
Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número
(Ej. si se genera el 3 luego mostrar en la página el string "tres").
AYUDA: Para ver si una variable es igual a cierto valor debemos plantear una condición similar a:
if ($valor==3) {
 // instrucciones
}
*/
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
    <?php
    $num=rand(1,3);
    if($num=1)
    { echo "uno";
    }
    else
    {
        if($num=2)
        {echo "dos";
    }
    else
    { 
        echo "tres";
    }
    } 
    
    
    ?> 
</body>
</html>
