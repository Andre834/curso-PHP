<?php

class Funcionario {
    private $salarioBruto;
    private $salarioLiquiodo;
    private $qtdHorasExtras;
    private $valorHoraExtra;
    private $INSS = 0.08;

    public function toString(){
        echo "SALARIO BRUTO = ".$this->salarioBruto."<br>";
        echo "SALARIO LIQUIODO = ".$this->salarioLiquiodo."<br>";
        echo "QTD DE HORAS EXTRAS = ".$this->qtdHorasExtras."<br>";
        echo "VALOR DA HORA = ".$this->valorHoraExtra."<br>";
        echo "VALOR DO INSS = ".$this->INSS;
    }
    
    public function cacularSalarioLiquido(){
        $tempSalario = $this->qtdHorasExtras * $this-> valorHoraExtra;
        $tempSalario +=$this->salarioBruto;
        $tempSalario = $tempSalario * (1- $this-> INSS);
        $this->salarioLiquiodo =$tempSalario;
        return $tempSalario;

    }

    public function getSalarioBruto(){
        return $this->salarioBruto;
    }

    public function setSalarioBruto($value){
        $this->salarioBruto = $value;
    }

    public function getQtdHorasExtras() {
        return $this-> qtdHorasExtras;
    }

    public function setQtdHorasExtras($value) {
        $this->qtdHorasExtras = $value;
    }

    public function getValorHoraExra() {
        return $this-> valorHoraExtra;
    }

    public function setValorHoraExra($value) {
        return $this-> valorHoraExtra = $value;
    }

    public function getINSS() {
        return $this->INSS;
    }

    public function setINSS($value) {
        return $this->INSS = $value;
    }

    public function getDescontoINSS() {
        return $this->descontoINSS;
    }



}







?>