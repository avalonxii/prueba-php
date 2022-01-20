<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        echo "<h2>variables y Constantes</h2>";
    
        define("DATO" , "un dato de ejemplo");
        echo "la constante dato es : ".DATO;


        $numero = 5;

        $numero ++;
        echo $numero;
        echo $numero++; //pinta y luego aumenta
        echo ++$numero; // aumenta y luego pinta

        echo "<hr>";
        echo "<h3>Operadores</h3>";

        $num1 = 10;
        $num2= 15;

        if($num1 >= $num2){
            echo "<p>el primer numero es mayor</p>";
        }
        else {
            echo "<p>el primer numero es menor</p>";
        }
        
        $aprobado = true;

        if($aprobado){
            echo "<p>has aprobado</p>";
        }
        else{
            echo "<p>NA :hhehehehe</p>";
        }

        $nota = "8";

        if($nota == 8){
            echo "<p>tu nota es un 8 - notable</p>";
        }
        else {
            echo "<p>tu nota NO es un 8 </p>";
        }

        echo "<hr>";
        echo "<h3>Estructuras de control</h3>";
        
        for ($i= 0; $i<=10; $i++){
            echo $i."-";
        }

        echo "<br>";
        $a=0;
        while ($a <= 10){
            echo $a++."-";
        }
    ?>

</body>
</html>