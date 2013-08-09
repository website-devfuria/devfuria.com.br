<?php
/*
 * class Produto
 * representa um Produto a ser vendido
 */
final class Produto
{
    private $descricao;      // descrição do produto
    private $estoque;        // estoque atual
    private $preco_custo;    // preço de custo
    
    /*
     * método construtor
     * define alguns valores iniciais
     * @param $descricao = descrição do produto
     * @param $estoque      = estoque atual
     * @param $preco_custo= preco de custo
     */
    public function __construct($descricao, $estoque, $preco_custo)
    {
        $this->descricao = $descricao;
        $this->estoque    = $estoque;
        $this->preco_custo= $preco_custo;
    }
    
    /*
     * método registraCompra
     * registra uma compra, atualiza custo e incrementa o estoque atual
     * @param $unidades     = unidades adquiridas
     * @param $preco_custo= novo preco de custo
     */
    public function registraCompra($unidades, $preco_custo)
    {
        $this->preco_custo   = $preco_custo;
        $this->estoque      += $unidades;
    }
    
    /*
     * método registraVenda
     * registra uma venda e decrementa o estoque
     * @param $unidades    = unidades vendidas
     */
    public function registraVenda($unidades)
    {
        $this->estoque -= $unidades;
    }
    
    /*
     * método getEstoque
     * retorna a quantidade em estoque
     */
    public function getEstoque()
    {
        return $this->estqoue;
    }
    
    /*
     * método calculaPrecoVenda
     * retorna o preco de venda, baseado em uma margem de 30% sobre o custo
     */
    public function calculaPrecoVenda()
    {
        return $this->preco_custo * 1.3;
    }
}

/*
 * classe Venda
 * representa uma Venda de Produtos
 */
final class Venda
{
    private $itens;	   // itens da cesta
    
    /*
     * método addItem
     * adiciona um item na cesta
     * @param $quantidade = quantidade vendida
     * @param $produto      = objeto produto
     */
    public function addItem($quantidade, Produto $produto)
    {
        $this->itens[] = array($quantidade, $produto);
    }
    
    /*
     * método getItems
     * retorna o array de itens da cesta
     */
    public function getItens()
    {
        return $this->itens;
    }
    
    /*
     * método finaliza
     * calcula o total de uma cesta e diminuir o estoque
     */
    public function finalizaVenda()
    {
        $total = 0;
        foreach ($this->itens as $item)
        {
            $quantidade = $item[0];
            $produto    = $item[1];
            
            // soma o total
            $total+= $produto->calculaPrecoVenda() * $quantidade;
            
            // diminui estoque
            $produto->registraVenda($quantidade);
        }
        return $total;
    }
}

// instancia objeto Venda
$venda= new Venda;

// adiciona alguns produtos
$venda->addItem(3, new Produto('Vinho', 10, 15));
$venda->addItem(2, new Produto('Salame', 20, 20));
$venda->addItem(1, new Produto('Queijo', 30, 10));

// finaliza a venda
echo $venda->finalizaVenda();
?>