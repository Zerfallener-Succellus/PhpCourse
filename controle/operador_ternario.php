<div class="titulo">Operados Ternário</div>
<?php
$idade = 10;
$status;

if($idade >= 18){
    $status = 'Maior de idade';
}else{
    $status = 'Menor de idade';
}

echo "$status<br>";


$idade = 70;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo "$status<br>";


