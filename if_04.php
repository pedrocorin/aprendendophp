<?php
/** Script que de teste com IF e ELSE em PHP
 * By Pedro Corin */
//Variaveis numéricas
$a = "Qualquer coisa";

//Verifica se $a está configurado (isset) e se NÂO está vazia (!)
if (isset($a) && ! empty($a)){
    echo "$a está configurada.<br>";
    echo "<br>$a tem o valor: " . $a;
}
?>
