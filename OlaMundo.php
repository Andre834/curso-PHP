<?php

//Estrutura de repetição


$i = 1 ;
while ($i <10) {
    echo $i++;
    
echo "<br>";
}


echo "<br>";

for ($i = 0; $i<10; $i++){
    echo $i;
    
echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


$x = 0;
while ($x <30) {
    echo $x;
    if ($x > 15) {
        echo "<br>erro! x > 15";
        break;
    }
    $x++;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//Pecorrendo um array
$arr[0]= "one";
$arr[1]= "two";
$arr[2]= "three";

$tamanho = sizeof($arr);

$i = 0;
while ($i <$tamanho) {
    echo "O valor é: ".$arr[$i]. "<br>";
    $i++;
}



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//Pecorrendo um array usando foreach
$arr[0]= "one";
$arr[1]= "two";
$arr[2]= "three";

$tamanho = sizeof($arr);
foreach($arr as $value) {
    echo "O valor é: ".$value. "<br>";

}




























?>