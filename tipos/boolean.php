<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversão
echo '<p>Regras:</p>';
//echo '<br>' . var_dump((boll) 0); Isso não mais funciona
echo '<br>' . var_dump(!! "false"); 
   

