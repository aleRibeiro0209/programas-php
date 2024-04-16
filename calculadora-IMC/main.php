<?php
// Programa que simula uma calculadora de IMC importando uma função de uma classe

// Impotando arquivo onde a classe esta 
require_once("calculo.php");

// Importando a classe usando o namespace
use Calculo\CalculoIMC;

// Se o input send for setado e o valor(value) for igual a Enviar   
if (isset($_POST["send"]) && $_POST["send"] == "Enviar") {

    // Variavel para usar a classe CalculoIMC normalmente neste arquivo
    $objeto = new CalculoIMC();
    $resultado = $objeto->calcularIMC($_POST["peso"], ($_POST["altura"]/100));

} else {
    // Se nao for setado ou o valor(value) nao for igual a Enviar $_POST e $resultado recebem nulo
    $_POST = null;
    $resultado = null;
}

?>

<!-- HTML BASICO PARA INTERACAO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <form action="" method="POST">

        <!-- Entrada das informacoes do usuario -->
        <label for="altura">Digite sua Altura:</label><br>
        <input type="number" name="altura" id="altura" placeholder="Valor em centimetros"><br><br>

        <label for="peso">Digite seu peso:</label><br>
        <input type="number" name="peso" id="peso" placeholder="Valor em quilos"><br>

        <input type="submit" value="Enviar" name="send"><br>

        <h1>
            <?php 
            // Imprimindo os resultados:
            switch ($resultado) {
                case ($resultado < 18.5):
                    echo"Abaixo do peso";
                    break;
            
                case ($resultado < 25):
                    echo"Peso normal";
                    break;

                case ($resultado < 30):
                    echo"Sobrepeso";
                    break;
                
                case ($resultado >= 30):
                    echo"Obeso";
                    break;
                }
            ?>
        </h1>
    </form>
</body>
</html>