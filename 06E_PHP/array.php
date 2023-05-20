<?php
$students = ["ali","huzaifa","aqsa","rafiya"];
echo $students[1] . " <br> " . $students[0] . "<br>";
?>
<h1>Foreach loop</h1>
<?php
 foreach($students as $value){
    echo $value . "<br>";
 }
?>
<h1>for loop</h1>
<?php
 for ($i=0; $i < count($students); $i++) { 
    echo $students[$i] . "<br>";
}
?>
<h1>Associative array</h1>
<?php
$students = [
    
    "std1" =>"ali",
   "std2" =>  "huzaifa",
   "std3" => "aqsa",
   "std4" => "rafiya"
];

echo $students['std1']. " " . $students['std3'] . "<br>";

foreach($students as $key => $item){
 echo $key. " = " . $item  ." <br>";
}


?>
