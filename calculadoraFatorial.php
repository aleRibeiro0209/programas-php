<?php

/* 
    Programa para calcular o fatorial de um numero inserido pelo usuario
        - Entrada do usuario por meio de um formulario com metodo POST;
        - Calcula o fatorial desse numero;
        - Imprime o fatorial.
*/

    // Se o input send for setado e o valor(value) for igual a Enviar
    if (isset($_POST["send"]) && $_POST["send"] == "Enviar") {
        
        // $fatorial recebe o valor inserido pelo usuario
        $fatorial = $_POST["numero"];

        // Para i recebendo o valor inserido pelo usuario menos 1 enquanto i menor ou igual a 1 executa 
        for ($i = $_POST["numero"]-1; $i >= 1; $i--) { 
            $fatorial *= $i;
        }
        
        // Imprime o fatorial
        echo"O fatorial de ". $_POST["numero"]." é ".$fatorial;

    } else {
        $_POST["numero"] = null;// Se o valor(value) nao for igual a Enviar $_POST["Numeros"] recebem nulo
    }

?>

<!-- HTML BASICO PARA INTERACAO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fatorial</title>
</head>
<body>
    <form action="" method="POST">

        <!-- Entrada de um número -->
        <label for="Numero">Digite um número:</label><br>
        <input id="Numero" type="number" name="numero"><br>
        <input type="submit" value="Enviar" name="send">

    </form>
</body>
</html>