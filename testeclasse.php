<?php

class Veiculo{
    private $cor;
    private $modelo;
    private $ano;

    public function getCor(){
        return $this->cor;
    }

    public function setCor($marquin ){
        $this->cor = $marquin;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getAno(){
        return $this->ano;   
    }
    public function setAno($ano){
        $this->ano = $ano;
    }


}

    $Veiculo = new Veiculo;
    $Veiculo->setCor("Azul");
    $Veiculo->setModelo("Corsa");
    $Veiculo->setAno(1992);
    echo "$Veiculo->getAno() $Veiculo->getModelo()  $Veiculo->getCor()";
    


?>