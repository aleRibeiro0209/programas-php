<?php

/* 
    Programa para verificar se um numero e primo 
        - Entrada do usuario por meio de um formulario com metodo POST;
        - Checa se o numero e primo ou nao;
        - Imprimi se o numero e primo ou nao.
*/

$quantidadeDiv = 0;

    // Se o input send for setado e o valor(value) for igual a Enviar
    if (isset($_POST["send"]) && $_POST["send"] == "Enviar") {
        echo $_POST["Numero1"]."<br>";

        // Para 1 menor ou igual o valor inserido i++
        for ($i=1; $i <= $_POST["Numero1"]; $i++) { 

            // Se o resto da divisao do numero inserido por i for igual a 0 $quantidadeDiv recebe oq ela tinha antes mais 1;
            if (($_POST["Numero1"]%$i) == 0) {
                $quantidadeDiv++;
            }
    
        }

        // Se $quantidadeDiv igual a 2 significa que o numero e primo 
        if ($quantidadeDiv == 2) {
            echo "O numero ".$_POST["Numero1"]." é primo"."<br>";
        } else {
            echo "O numero ".$_POST["Numero1"]." não é primo"."<br>";
        }

    } else {
        $_POST["Numero1"] = null; // Se o valor(value) nao for igual a Enviar $_POST["Numeros"] recebem nulo
    }
    
?>

<!-- HTML BASICO PARA INTERACAO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFICA SE PRIMO</title>
</head>
<body>
    <h2>VERIFICA  SE PRIMO</h2>
    <form action="" method="POST">

        <!-- Entrada do primeiro número -->
        <label for="numero">Digite o primeiro número:</label><br>
        <input id="numero" type="number" name="Numero1"><br>
        <input type="submit" value="Enviar" name="send">

    </form>
</body>
</html>