<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
$file = fopen($_SERVER['argv'][1], 'r');
fscanf($file, "%d", $n);
for($i = 0; $i < $n; $i++) {
fscanf($file, "%d %d %d", $pri['unit'], $pri['price'], $pri['isWhole']);
$pris[] = $pri;
}
class calculatePrice
{
private $unit;
private $unitCal=0;
private $price=0;
function __construct($unit){
$this->unit = $unit;
$this->unitCal = $unitCal;
$this->price = $price;
 }
function price($pris,$unit){
for($i = 0; $unit > 0; $i++) {
$this->unitCal = ($unit > $pris[$i]['unit'])? $pris[$i]['unit'] : $unit;
$this->price += ($pris[$i]['isWhole']=1)? $pris[$i]['price'] : $this->unitCal * $pris[$i]['price'];
$unit -= $this->unitCal;
}
        printf("Price of electricity bill = %d ",$this->price);
 echo"\n";
return $this->price;}
}
 do{$unit = null;
    printf("Input usage unit(-1 for exit): ");
    fscanf(STDIN, "%d", $unit);
    $calculatePrice = new calculatePrice($pris,$unit);
    $calculatePrice->price($pris,$unit);}
while($unit!=-1);


