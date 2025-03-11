<?php
    /** Arrays são coleções de dados */
    $nome = array("João", "Maria", "Pedro", "Ana");
    echo $nome[0];

    $numeros = [1, 2, 3, 4, 5];
    echo "<br>";
    echo $numeros[2];

    $variaveis_misturadas = ["João", 25, true];
    echo "<br>";
    echo $variaveis_misturadas[2];

    $informacao["nome"] = "João";
    $informacao["idade"] = 25;
    $informacao["cidade"] = "Rio de Janeiro";
    echo "<br>";
    echo $informacao["cidade"];
    echo "<br>";
    echo $informacao["idade"];
    echo "<br>";
    echo $informacao["nome"];

    // Exercício 1: Criando e Acessando Arrays
    $frutas = ["banana", "maca", "laranja", "uva"];
    echo "<br>";
    echo $frutas[1];
    echo $frutas[] = "abacaxi";
    echo "<br>";
    print_r($frutas);

    // Exercício 1: Exercício 2: Contando Elementos de um Array
    $numeros = [10, 20, 30, 40, 50];
    echo "<br>";
    echo count($numeros);
    echo "<br>";
    echo $numeros[count($numeros) - 1];

    // remover primeiro elemento do array
    array_shift($numeros);
    echo "<br>";
    print_r($numeros);

    //Exercício 3: Modificando Arrays
    $cores = ["vermelho", "verde", "azul"];
    print_r($cores);
    echo "<br>";

    //Substitua o valor "Verde" por "Amarelo".
    $cores[1] = "amarelo";
    print_r($cores);
    echo "<br>";

    //Adicione a cor "Roxo" no final do array.
    $cores[] = "roxo";
    print_r($cores);
    echo "<br>";

    // Remova a cor "Azul" do array.
    unset($cores[2]);
    print_r($cores);

    // Exiba o array final.
    echo "<br>";
    print_r($cores);