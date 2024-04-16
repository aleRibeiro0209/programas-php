<?php

/* 
    Programa para calcular media de 3 numeros inseridos pelo usuario
        - Entrada do usuario por meio de um formulario com metodo POST;
        - Imprime os numeros;
        - Calcula a media desses numeros;
        - Imprime o resultado.
*/

    // Se o valor(value) for igual a Enviar   
    if ($_POST["send"] == "Enviar") {

        // Imprimir numeros
        echo $_POST["Numero1"]."<br>";
        echo $_POST["Numero2"]."<br>";
        echo $_POST["Numero3"]."<br>";
        
        // Resultado recebe o calculo da media dos valores inseridos no formulario
        $resultado = ($_POST["Numero1"] + $_POST["Numero2"] + $_POST["Numero3"])/3;
        echo "<br>".$resultado;

    } else {
        $_POST["Numero1"] = $_POST["Numero2"] = $_POST["Numero3"] = null;
        // Se o valor(value) nao for igual a Enviar $_POST["Numeros"] recebem nulo
    }
    
?>

<!-- HTML BASICO PARA INTERACAO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Media</title>
</head>
<body>
    <h2>Calculadora de Média</h2>
    <form action="" method="POST">

        <!-- Entrada do primeiro número -->
        <label for="numero1">Digite o primeiro número:</label><br>
        <input id="numero1" type="number" name="Numero1"><br>

        <!-- Entrada do segundo número -->
        <label for="numero2">Digite o segundo número:</label><br>
        <input id="numero2" type="number" name="Numero2"><br>
        
        <!-- Entrada do terceiro número -->
        <label for="numero3">Digite o terceiro número:</label><br>
        <input id="numero3" type="number" name="Numero3"><br>

        <input type="submit" value="Enviar" name="send">

    </form>
</body>
</html>