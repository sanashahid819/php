<?php
// first method
define("pi",3.142);
echo pi . "<br>";
?>
<!-- method 2 -->
<?php
CONST blood = "O+";
 $blood = "O-";
echo blood . "<br>";
?>
<!--function  -->
<?php
// function cal($num ,$num2){
//  echo  (pi * $num )+ $num2;
// }
// cal(5,7);

$num1 = 45;
$num2 = 34 ;
function sum(){
    global $num1 , $num2 ;
    echo ($num1 + $num2) ;
}
sum();

?>
