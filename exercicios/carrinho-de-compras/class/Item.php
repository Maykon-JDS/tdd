<?php 

namespace Carrinho;



class Item {

    /**
    * Nome do ite
    *
    * @var string
    */
    protected string $nome;

    /**
    * Preço do item
    * 
    * @var float
    */
    protected float $preco;
    
    /**
    * Categoria do item
    * 
    * @var Categoria
    */
    protected Categoria $categoria;

    /**
    * Class constructor (Magic Method)
    *
    * @return void
    */
    public function __construct(string $nome, float $preco, Categoria $categoria)
    {   
        
        $this->nome = $nome;

        $this->preco = $preco;

        $this->categoria = $categoria;

    }

    public function getNome() : string
    {

        return $this->nome;

    }

    // public function setNome() : void
    // {



    // }

    // public function getPreco() : float
    // {



    // }

    // public function setPreco() : void
    // {

        

    // }

    // public function getMaiorEMenor() : Categoria
    // {



    // }

    // public function setCategoria() : void 
    // {



    // }


}

?>