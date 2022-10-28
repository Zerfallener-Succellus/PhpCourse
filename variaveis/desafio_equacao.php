<div class="titulo">Desafio Equação</div>
<?php

$first_fraction = ((6 * (3 + 2))**2)/(3*2);
$second_fraction = ((1-5)*(2-7)/2)**2;
$fraction_principal_top = ($first_fraction - ($second_fraction))**3;
$fraction_principal_bot = 10**3;
$fraction_result = $fraction_principal_top / $fraction_principal_bot;


echo "O resultado final é :". $fraction_result;