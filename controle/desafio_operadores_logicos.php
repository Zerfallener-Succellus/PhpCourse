<div class="titulo">Desafio Operadores Lógicos</div>
<!--
Dois trabalhos -> terça e quinta!
-Se os dois forem executados -> TV 50' e Sorvetre
-Se apenas um for executado -> TV 32' e Sorvete
-Se nenhum for executado -> Fica em casa mais saudável !
-->

<form action="" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php

$t1 = !!$_POST['t1'];
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 xor $t2){
    $tv = '32"';
}else if($t1 && $t2 ){
    $tv = '50"';
};

if($t1 || $t2){
    $sorvete = true;
}else if($t1 && $t2){
    $sorvete = true;
};

if($tv) {
    $resultado = "Vamos comprar uma TV de $tv";
}else{
    $resultado = "sem TV dessa vez :(";
};

if(!$sorvete){
    $resultado .= '<br>Estamos mais saudáveis !';
}else{
    $resultado .= '<br>Sorevete liberado !';
};

echo "<p>$resultado</p>";

