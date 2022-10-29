<div class="titulo">IF ELSE</div>
<?php

if(true) {
    echo "Serei impresso?<br>";
    echo "Serei impresso novamente?<br>";
}

//Ponto e virgula encerra a sentença de codigo
//O if leva o que vem logo após caso hajá algo entre, ele escolhe somente o primeiro
// A chave cria um bloco de codigo like java

echo "<br>";

if(false){
    echo "Verdadeiro<br>";
}else{
    echo"Falso<br>";
}

if(false){
    echo "<br>Passo A<br>";
} else if(true){
    echo "<br>Passo B<br>";
}else{
    echo "Ultimo Passo<br>";
}


echo "<br>Fim<br>";

