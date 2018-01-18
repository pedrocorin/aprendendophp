<?php
if (isset($_POST['BTVai'])){
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$soma = $n1 + $n2;
echo"Informe dois valores para serem calculados: <br>";

if($soma > 20){
    echo "<br/>Como a soma de $n1 e $n2 são maiores que 20, vamos somar mais 8 que é igual a:" . $soma + 8;
}elseif($soma <= 20){
    echo "<br/>Como a soma de $n1 e $n2 são menores ou igual a 20, vamos subtrair 5, que fica igual a: " . $soma - 5;
}

}
?>

<form action="<? $PHP_SELF; ?>" method="POST">
    <p>
        Primeiro Número:<br />
        <input type="text" size="30" name="n1">
    </p>
    <p>
        Segundo Número:<br />
        <input type="text" size="30" name="n2">
    </p>
    <p>
        <input type="submit" name="BTVai" value="Taca-lhe pau!!!"
        <input type="reset" name="BTApaga" value="Apagar">
    </p> 

