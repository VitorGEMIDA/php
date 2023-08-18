<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio</h1>


 <!-- Código do float -->
 <?php

$a = "testando pro exerc";
$b = 22.9;

if(is_float($a)) {
  echo "É o resultado 1! <br>";
}

if(is_float($b)) {
  echo "É o resultado 2! <br>";
}

// Código do string

$str = "MORPHH7";
$num = 007;

if(is_string($str)) {
 echo "$str é um profi <br>";
}

if(is_string($num)) {
 echo "$num não deu bom <br>";
}

// Código do booleano

$a = true;

if(is_bool($a)) {
  echo "É um bot  <br>";
}

if(is_bool(0)) {
  echo "É um cara bom <br>";
}

// Código do array

echo "<p> Sintaxe NORMAL : Usa o nome e põe os valores entre parenteses. </p>";
$a = array(1, 4, 6, 7);

print_r($a); 
echo "<br>";


