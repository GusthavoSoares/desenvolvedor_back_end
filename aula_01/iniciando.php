<?php

$nome = "Gusthavo";
$idade = 19;
$peso = 74.1;
$gostos = ["animes", "estudos", "area" => "programação"];

echo "Bem-vindo(a) $nome!
<p>A minha idade é $idade</p>
<h1>O meu peso é $peso kg</h1>
<small>O meu primeiro gosto é ". $gostos[0]."</small>".
"<strong>A minha area é a de " .$gostos["area"]."</strong>";

?>

