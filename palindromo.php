<?php

/* 
    Programa para verificar se um palindromo ou seja a palavra e igual de traz pra frente 
        - Entrada do usuario por meio de um formulario com metodo POST;
        - Checa se a palavra e um palindromo ou nao;
        - Imprimi se a palavra e um palindromo ou nao.
*/

    // Se o input send for setado e o valor(value) for igual a Enviar   
    if (isset($_POST["send"]) && $_POST["send"] == "Enviar") {

        // Transforma a palavra dada pelo usuario em maiuscula
        $_POST["palavra"] = strtoupper($_POST["palavra"]);

        // Chama a funcao strrev() para inverter a string. Se a string invertida for igual a string normal imprime que a palavra e um palindromo caso contrario imprime que nao e.
        if (strrev($_POST["palavra"]) == $_POST["palavra"]){
            echo "A palavra ".$_POST["palavra"]." é um Palíndromo.";
        } else {
            echo "A palavra ".$_POST["palavra"]." não é um Palíndromo.";
        }

    } else {
        $_POST["palavra"] = null; // Se nao for setado ou o valor(value) nao for igual a Enviar $_POST["Numero1"] recebe nulo
    }

?>

<!-- HTML BASICO PARA INTERACAO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica se Palindromo</title>
</head>
<body>
    <form action="" method="POST">

        <!-- Entrada da palavra -->
        <label for="palavra">Digite a uma palavra:</label><br>
        <input id="palavra" type="text" name="palavra"><br>
        <input type="submit" value="Enviar" name="send">
    </form>
</body>
</html>