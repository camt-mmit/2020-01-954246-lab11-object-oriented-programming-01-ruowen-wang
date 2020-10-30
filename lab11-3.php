<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
$str=null;
$num=null;
$res = null;
$menu=null;
class multiplication{  
private $num; 
private $res;
function __construct( $num){
$this->column= $num;
$this->result= $res=null;}
function multi($num){
for($j=1;$j<=15;$j++) {
         for($i=2;$i<=$num;$i++) {
         $this->result=$j * $i;
         printf("%4d ",$this->result);}
         echo"\n";}   
return  $this->result;}}
$pris[0]=array('unit'=>0,'price'=>0,'isWhole'=>1);
$pris[1]=array('unit'=>10,'price'=>10,'isWhole'=>1);
$pris[2]=array('unit'=>15,'price'=>3,'isWhole'=>0);
$pris[3]=array('unit'=>20,'price'=>5,'isWhole'=>0);
$pris[4]=array('unit'=>30,'price'=>10,'isWhole'=>0);
$pris[5]=array('unit'=>999999,'price'=>20,'isWhole'=>0);
class calculatePrice{
private $unit;
private $unitCal=0;
private $price=0;
function __construct($unit){
$this->unit = $unit;
$this->unitCal = $unitCal=null;
$this->price = $price=null;}
function price($pris,$unit){
        for($i = 0; $unit > 0; $i++) {
        $this->unitCal = ($unit > $pris[$i]['unit'])? $pris[$i]['unit'] : $unit;
        $this->price += ($pris[$i]['isWhole']=1)? $pris[$i]['price'] : $this->unitCal * $pricings[$i]['price'];
		$unit -= $this->unitCal;}
    printf("Price of electricity bill = %d ",$this->price);
        echo"\n";
        return $this->price;}}
print("1. Multiplication Table\n");
print("2. Electricity Bill calculation\n");
print("3. exit\n");
$class= new multiplication($y, $num);
while($menu!=3) {
    $menu = null;
    printf("Input menu number:  ");
    fscanf(STDIN, "%d", $menu);
    if($menu==2){
    printf("Input usage unit:  ");
    fscanf(STDIN, "%d", $unit);
    $calculatePrice = new calculatePrice($pris,$unit);
    $calculatePrice->price($pris,$unit);}
    if($menu==1){
    printf("Input size:  ");
    fscanf(STDIN, "%d", $num);
    $class->multi($num);}
    if($menu!=1 && $menu!=2 && $menu!=3){
        printf("Invalid menu number 5!!! \n");}}
