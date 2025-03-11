<?php
    //define("PI", 3.14159);
    //echo PI;
    //define("NOME", "Flávio");
    //echo "<br>";
    //echo NOME;
    /**
     * exercircio proposto
     * criar uma constante para o valor de pi
     */
    echo "<br>";
    // definir a constante
    define("PI", 3.14159);

    // definir o raio
    $raio = 5;

    // calcular a area  do circulo
    $area = PI * $raio * $raio;

    // Calculando a circunferencia do circulo
    $circunferencia = 2 * PI * $raio;

    // exibir os resultados
    echo "A area do circulo e: " . $area . "<br>";
    echo "A circunferencia do circulo e: " . $circunferencia . "<br>";