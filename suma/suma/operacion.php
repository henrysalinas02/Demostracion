<?php
    // Obtener los valores de los campos del formulario
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Realizar la suma
    $suma = $num1 + $num2;

    // Mostrar el resultado
    echo "La suma de $num1 + $num2 es: " . $suma;
?>