<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional_statement</title>
</head>
<body>
    


<?php

$name =  "ali";
$color = "green";
$color2 = "red"; 

if($name == "aqsa"){
echo "<h1 style='color:$color'> welcome " . $name . "</h1>";
}
else{
    echo "<h1 style='color:$color2'>"." name not matched " . "</h1>";
}

?>



</body>
</html>