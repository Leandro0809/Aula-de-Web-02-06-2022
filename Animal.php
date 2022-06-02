<?php

class Animal{
    private $nome;
    private $raca;

    public function getNome(){
        return $this->nome;
        }
    public function setNome($nome){
        $this->nome = $nome;
    } 
    public function getRaca(){
        return $this->raca;
    }
    public function setRaca($raca){
        $this->raca = raca;
    }
   }

    $Animal = new Animal;
    $Animal->setRaca("Husky");
    $Animal->setNome("Fantasma");

    echo $Animal->getRaca(). $Animal->getNome();

?>