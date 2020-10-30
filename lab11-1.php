<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
$str=substr($_SERVER['argv'][1], 0, );
class multiplication{  
private $str;
private $num; 
private $res;
    function __construct($str, $num){
        $this->row = $str;
        $this->column= $num;
        $this->result= $res; }
     
    function multi($num){
        for($j=1;$j<=$this->row;$j++) {
           for($i=2;$i<=$num;$i++) {
            $this->res=$j * $i;
            printf("%4d ",$this->res);}
           echo"\n";}       
    return  $this->res;}
}
         $class= new multiplication($str, $number);
         $num=1;
         do {printf("Input size (0 for exit):  "); 
             fscanf(STDIN,"%d",$num);
             $class->multi($num);}
         while($num!=0);