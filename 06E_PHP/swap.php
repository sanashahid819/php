<?php
 $n1 = 5;
 $n2 = 15; 
  echo "before swaping n1 " . $n1 . " n2 " .$n2 ."<br>";
  $n1 = $n1 + $n2; 
//  $n1 = 20
$n2 = $n1 - $n2 ;
//  $n2 = 5
$n1 = $n1  - $n2;
echo "after swaping n1 " . $n1 . " n2 " .$n2 ;


?>