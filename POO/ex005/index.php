<?php

include __DIR__ . "/produto.php";

$produto1 = new Produto("001", "Ração para cães");
$produto1->setPreco(85);
$produto1->setQtdEstoque(5);
$produto1->setCategoria("Pet");
$produto1->setFornecedor("Petshop");
$produto1->setTipoDesconto("Familia");
echo $produto1->obterDadosProduto() . "<br>";
echo "Valor do estoque: R$:" . $produto1->calcularValorEstoque() . "<br>";
echo "Valor após o desconto: R$:" . $produto1->aplicarDesconto() . "<br>";
echo "Quantidade no estoque após reabastecer: " . $produto1->reabastecerEstoque(10);