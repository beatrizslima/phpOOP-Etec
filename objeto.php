<?php

include_once 'pessoa.php'
include_once 'conta.php'

# criacao do obj Carlos

$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = 'Carlos da Silva';
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";   

echo "Manipulando o objeto $carlos"
?>