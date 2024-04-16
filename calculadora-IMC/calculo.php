<?php

// Nome que esta encapsulando a classe CalculoIMC
namespace Calculo;

// Classe para calculo de IMC
    class CalculoIMC {

        // Função para calcular o IMC do usuario
        public static function calcularIMC($p, $a){
            return $p / $a**2;
        }
    }

?>