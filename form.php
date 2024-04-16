<?php

/* 
    Programa para fazer interacao simples com um formulario
        - Capturar dados inseridos no formulario;
        - Imprimir dados obtidos.
*/

    // Imprime os dados do array $_POST com um "estilo" pre definido
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
        
    // if (isset($_POST ["nome_novo"])) {
    //     $_POST ["nome"] = $_POST ["nome_novo"];
    // } else {
    //     $_POST ["nome"] = "José";
    // }
    
?>

<!-- HTML BASICO PARA INTERACAO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- Exemplo de formulario -->
    <form action="" method="POST" >

        <!-- Exemplo de uso para criar um post antes de usar um form no HTML -->
        <!-- <input type="text" name="nome_novo"> -->

        <label for="Nome">Nome</label>
        <input id="Nome" type="text" name="Nome">
        <br>
        <label for="Idade">Idade</label>
        <input id="Idade" type="number" name="Idade">
        <br>
        <label for="Email">E-mail</label>
        <input id="Email" type="email" name="Email">
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
