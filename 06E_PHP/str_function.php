<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str fUnction</title>
</head>
<body>
    
<form action="" method="post">
<label for="">enter file name</label>
<input type="text" name="ex">
<br>
<input type="submit" name="sub" value= "find extension">

</form>

<?php
if(isset($_POST['sub'])){
    $extension = $_POST['ex'];
    $ex = explode('.',$extension);
    // $file_ex = $ex[count($ex)-1];
    $file_ex = $ex[array_key_last($ex)];
    echo $file_ex;

}

?>
</body>
</html>