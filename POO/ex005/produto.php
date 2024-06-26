<?php

class Produto
{
  private $codigo;
  private $nome;

  public $preco;
  public $qtdEstoque;
  public $categoria;
  public $fornecedor;
  public $tipoDesconto;

  public function __construct($codigo, $nome)
  {
    $this->codigo = $codigo;
    $this->nome = $nome;
  }

  public function setTipoDesconto($tipoDesconto)
  {
    $this->tipoDesconto = $tipoDesconto;
  }

  public function setPreco($preco)
  {
    $this->preco = $preco;
  }

  public function getPreco()
  {
    return $this->preco;
  }

  public function setQtdEstoque($qtdEstoque)
  {
    $this->qtdEstoque = $qtdEstoque;
  }

  public function getQtdEstoque()
  {
    return $this->qtdEstoque;
  }

  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;
  }

  public function getCategoria()
  {
    return $this->categoria;
  }

  public function setFornecedor($fornecedor)
  {
    $this->fornecedor = $fornecedor;
  }

  public function getFornecedor()
  {
    return $this->fornecedor;
  }

  public function calcularValorEstoque()
  {
    return ($this->preco) * ($this->qtdEstoque);
  }

  public function aplicarDesconto()
  {
    if ($this->tipoDesconto == "Familia") {
      return $this->preco -= ($this->preco) * 0.2;
    }
    if ($this->tipoDesconto == "Cliente") {
      return $this->preco -= ($this->preco) * 0.1;
    }
    if ($this->tipoDesconto == "Amigo") {
      return $this->preco -= ($this->preco) * 0.15;
    }
  }

  public function reabastecerEstoque($quantidade)
  {
    return $this->qtdEstoque + $quantidade;
  }

  public function obterDadosProduto()
  {
    return "Produto: " . $this->nome .
      "<br>" .
      "Código do produto: " . $this->codigo .
      "<br>" .
      "Preço: R$:" . $this->preco .
      "<br>" .
      "Quantidade em Estoque: " . $this->qtdEstoque .
      "<br>" .
      "Categoria: " . $this->categoria .
      "<br>" .
      "Fornecedor: " . $this->fornecedor;
  }
}
