<?php
/**
 * Código-fonte do livro "PHP Profissional"
 * Autores: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - todos os direitos reservados
 *
 * LICENÇA: Este arquivo-fonte está sujeito a Atribuição 2.5 Brasil, da licença Creative Commons, 
 * que encontra-se disponível no seguinte endereço URI: http://creativecommons.org/licenses/by/2.5/br/
 * Se você não recebeu uma cópia desta licença, e não conseguiu obtê-la pela internet, por favor, 
 * envie uma notificação aos seus autores para que eles possam enviá-la para você imediatamente.
 *
 *
 * Source-code of "PHP Profissional" book
 * Authors: Alexandre Altair de Melo <alexandre@phpsc.com.br>
 *          Mauricio G. F. Nascimento <mauricio@prophp.com.br>
 *
 * http://www.novatec.com.br/livros/phppro
 * ISBN: 978-85-7522-141-9
 * Editora Novatec, 2008 - all rights reserved
 *
 * LICENSE: This source file is subject to Attibution version 2.5 Brazil of the Creative Commons 
 * license that is available through the following URI:  http://creativecommons.org/licenses/by/2.5/br/
 * If you did not receive a copy of this license and are unable to obtain it through the web, please 
 * send a note to the authors so they can mail you a copy immediately.
 *
 */

class Produto {
	private $codigo;
	private $nome;
	private $preco;

	public function __construct($codigo, $nome, $preco) {
		$this->setCodigo($codigo);
		$this->setNome($nome);
		$this->setPreco($preco);
	}
	public function setCodigo($codigo) {
		$this->codigo = $codigo;
	}
	public function getCodigo() {
		return $this->codigo;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setPreco($preco) {
		$this->preco = $preco;
	}

	public function getPreco() {
		return $this->preco;
	}
}

class CarrinhoDeCompra implements Iterator, Countable {

	//array para guardar os produtos
	private $produtos;

	public function __construct() {
		$this->produtos = array();
	}

	//coloca o ponteiro do array no primeiro elemento
	public function rewind() {
		reset($this->produtos);
	}

	//retorna o elemento corrente
	public function current() {
		$var = current($this->produtos);
		return $var;
	}

	//retorna a chave do array do elemento corrente
	public function key() {
		$var = key($this->produtos);
		return $var;
	}

	//retorna o próximo elemento
	public function next() {
		$var = next($this->produtos);
		return $var;
	}

	//verifica se existe próximo elemento
	public function valid() {
		$var = $this->current() !== false;
		return $var;
	}

	//configura um novo array de produtos para o carrinho
	public function setArrayProdutos($produtos) {
		$this->produtos = $produtos;
	}

	//retorna o array de produtos do carrinho de compras
	public function getArrayProdutos() {
		return $this->produtos;
	}

	//adiciona produtos ao carrinho
	public function adicionaProduto($produto) {
		if ($produto instanceof Produto) {
			$this->produtos[$produto->getCodigo()] = $produto;
		} else {
			echo "O produto passado não é um objeto produto.";
		}
	}

	//remove produtos do carrinho
	public function removeProduto($produto) {
		if ($produto instanceof Produto) {
			unset($this->produtos[$produto->getCodigo()]);
		} else {
			echo "O produto passado não é um objeto produto.";
		}
	}

	//implementando o método count
	public function count() {
		return count($this->getArrayProdutos());
	}

}

//criando três produtos
$produto1 = new Produto(1, "Bicicleta", 300.00);
$produto2 = new Produto(2, "Notebook", 2500);
$produto3 = new Produto(3, "Camiseta", 29.90);

//criando o carrinho de compras e adicionando os 3 produtos
$carrinho = new CarrinhoDeCompra();
$carrinho->adicionaProduto($produto1);
$carrinho->adicionaProduto($produto2);
$carrinho->adicionaProduto($produto3);

$carrinho->rewind();

echo "<p>"."Chave atual " . $carrinho->key()."</p>";
echo "<p>";
print_r($carrinho->current());
echo "</p>";

$carrinho->next();

if ($carrinho->valid()) {
	echo "<p>"."Chave atual " . $carrinho->key()."</p>";
	echo "<p>";
	print_r($carrinho->current());
	echo "</p>";
	$carrinho->next();
}

if ($carrinho->valid()) {
	echo "<p>"."Chave atual " . $carrinho->key()."</p>";
	echo "<p>";
	print_r($carrinho->current());
	echo  "</p>";
	$carrinho->next();
}

if (!$carrinho->valid()) {
	echo "<p>O array de produtos já atingiu o seu final</p>";
}


$carrinho->removeProduto($produto2);
echo "Quantidade de produtos no carrinho de compra : "
. count($carrinho->getArrayProdutos());

?>