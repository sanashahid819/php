<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <title>String Comparison</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6">
<form action="" method="post">
<label for="">Enter Country Code</label>
<input type="text" class="form-control" name="c_code">
</div>
<button class="mt-4 btn btn-dark" type="submit" name="find">submit</button>
</form>

<?php
if(isset($_POST['find'])){
    $code = $_POST['c_code'];
    $myCountryCode = '+92';
    $comparison = strcmp($code,$myCountryCode);
    if($comparison==0){
        echo '<div class="col-md-6"><img class="mt-5" src="images/pak.webp" height="200px"></div>';

    }
    else{
        echo 'invalid code';
    }
}

?>

</div>

</body>
</html>