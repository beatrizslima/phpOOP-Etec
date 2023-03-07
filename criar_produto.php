<?php
include_once 'produto.php';



$produto1 = new Produto;
$produto2 = new Produto; 

$produto1 -> Codigo = 4001;
$produto1 -> Preco = 10;
$produto1 -> Quantidade = 5;
$produto1 -> Porcentagem = 10;
$produto1 -> Descricao = "CD The Best of Eric Clapton";

$produto2 -> Codigo = 4002;
$produto2 -> Preco = 15;
$produto2 -> Quantidade = 10;
$produto2 -> Porcentagem = 15;
$produto2 -> Descricao = "CD The Eagles Hotel California";

$produto1 ->ImprimeEtiqueta();
$produto1 ->Desconto();
$produto2 ->ImprimeEtiqueta();
$produto2 ->Desconto();

?>