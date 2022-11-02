<div class="titulo">Desafio Switch 01</div>
 <form action="#" method="POST">
    <input type="text" name="param">
    <select name="coversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
</select>
<button>Calcular</button>
 </form>

 <style>
    form > * {
        font-size: 1.5rem;
    }
 </style>

 <?php

$distancia;
$temperatura;
$mensagem;
$conversao = $_POST['coversao'];
$param = $_POST['param'];

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
$formula_temperatura_c_to_f = ($param * 9/5) + 32;
$formula_temperatura_f_to_c = ($param - 32) * 5/9;


switch($conversao){
    case 'km-milha':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia metros";
        break;
    case 'f-c':
        $temperatura = $formula_temperatura_f_to_c;
        $mensagem = "$param f° = $temperatura c°";
        break;
    case 'c-f':
        $temperatura = $formula_temperatura_c_to_f;
        $mensagem = "$param c° = $temperatura f°";
        break;
}

echo "<br>$mensagem<br>";
