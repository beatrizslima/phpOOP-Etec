<?php

class Produto
{
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;
    var $Porcentagem;

    
function ImprimeEtiqueta()
{
    print'Codigo: ' . $this->Codigo . "<br>";
    print'Descrição: ' . $this->Descricao . "<br>";
    print'Preço: ' . $this->Preco. "<br>";
    print'Quantidade: ' . $this->Quantidade . "<br>";

}


function Desconto()
{
   print 'Preço com desconto: ' .$this->Preco - ($this->Preco * $this->Porcentagem/100). "<br>";
} 

}

?>
<!-- 
if($Quantidade >= 5)
    $Preco - ($Preco * $Porcentagem/100) -->
