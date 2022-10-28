<div class="titulo">Valor vs. Referência</div>

<?php

// Atribuição por valor

$variavel = 'valor inicial';
echo $variavel;

$variavelValor = $variavel;
echo "<br>$variavelValor";

$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

//Atribuiução por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";