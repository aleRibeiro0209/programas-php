<?php

// Declara um namespace para encapsular a classe, evitando a colisao de nome de funcoes
namespace OperacaoMatematica;

// Criando classe OperacoesBasicas
class OperacoesBasicas {

    // Declarando funcao publica soma
    public function soma($a, $b){
        return $a + $b;
    }

    // Declarando funcao publica subtracao
    public function subtracao($a, $b){
        return $a - $b;
    }

    // Declarando funcao publica multiplicacao
    public function multiplicacao($a, $b){
        return $a * $b;
    }

    // Declarando funcao publica divisao
    public function divisao($a, $b){
        return $a / $b;
    }

}

