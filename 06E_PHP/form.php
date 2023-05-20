<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <title>form</title>
</head>
<body>
    
<div class="container mt-3">

<form action="" method="post">

<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
  <label for="">password</label>
  <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<input type="submit" class="btn btn-dark" name="register" value="SignUp">

</form>

</div>

<?php
if(isset($_POST['register'])){
$name  = $_POST['name'];
$email = $_POST['email'];
$pas = $_POST['password'];


?>

<h1><?php  echo " hello "  . $name ?></h1>
<?php


}
?>



</body>
</html>