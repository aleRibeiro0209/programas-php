<?php

// Programa que simula uma calculadora com as quatro operacoes basicas importadas de uma classe

// Impotando arquivo onde a classe esta 
require_once 'operacoes.php';

// Importando a classe usando o namespace
use OperacaoMatematica\OperacoesBasicas;

// Variavel para usar a classe OperacoesBasicas normalmente neste arquivo
$objeto = new OperacoesBasicas;

// Utilizando as funcoes publicar que estao dentro da classe 
$resultadoSoma = $objeto->soma(5, 5);
$resultadoSubtracao = $objeto->subtracao(5, 5);
$resultadoMultiplicacao = $objeto->multiplicacao(5, 5);
$resultadoDivisao = $objeto->divisao(5, 5);

// Imprimindo os resultados:
echo $resultadoSoma."<br>".$resultadoSubtracao."<br>".$resultadoMultiplicacao."<br>".$resultadoDivisao;

// Para concatenar usasse o "."
// echo $resultadoSoma."<br>";
// echo $resultadoSubtracao."<br>";
// echo $resultadoMultiplicacao."<br>";
// echo $resultadoDivisao."<br>";