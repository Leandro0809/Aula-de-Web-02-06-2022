<?php
class Produtos{
    public $nome;
    public $valor;
    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
    // melhorar essa classe pra ter update, fazer funções get e sets, funç adicionar parametros

}

class Carrinho{
    public $prodCar;
    public $quantidade;
    public function adiciona(Produtos $produto){
        $this->prodCar[] = $produto;
    }
    //editar carrinho
    public function exibir(){
        foreach($this->prodCar as $prod){
            echo $prod->nome. '<br>';
            echo $prod->valor. '<hr>';

        }
    }
    public function totaliza(){
        foreach($this->prodCar as $prod){
            $this->total+=$prod-> valor * $prod->quantidade;

        }
        echo "o total é de:". $this->total;
    }
}

$produto1= new Produtos("Computador", "2000");
$produto2= new Produtos("Mouse", "50");
$produto3= new Produtos("Notebook", "5000");
$produto4= new Produtos("Geladeira", "9000");
$produto5= new Produtos("iPhone X", "1850");
$produto6= new Produtos("iPhone Xr", "2800");


$carrinho = new Carrinho();

$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->adiciona($produto4);

$carrinho->adiciona($produto5);
$carrinho->adiciona($produto6);

$carrinho->exibir();

?>