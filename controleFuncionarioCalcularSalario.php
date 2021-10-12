<?php
include "exercicio.php";

$txtSalario             = $_GET["txtSalario"];
$txtQtdHorasExtra       = $_GET["txtQtdHorasExtra"];
$txtValorHoraExra       = $_GET["txtValorHoraExra"];


$funcionario1 = new Funcionario();
$funcionario1->setSalarioBruto($txtSalario);
$funcionario1->setQtdHorasExtras($txtQtdHorasExtra);
$funcionario1->setValorHoraExra($txtValorHoraExra);
//$funcionario1->setINSS(0.1);

//echo "salario = " .$funcionario1->getSalarioBruto()."<br>";
//echo "horas extras = " .$funcionario1->getQtdHorasExtras()."<br>";
//echo "valor da hora extra = " .$funcionario1->getValorHoraExra()."<br>";
//echo "INSS = " .$funcionario1->getINSS()."<br>";
$funcionario1->cacularSalarioLiquido();

echo $funcionario1->toString();




?>