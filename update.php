<?php
include("pdof.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">

    <title>update</title>
</head>
<body>
    <h1>update</h1>
    <form action="" method="post">
        <div class="form-control">
            <label for="">id:</label>
            <input type="text" name="id" class="form-control" placeholder="id">
        </div>
        <br>
        <div class="form-control">
            <label for="">name:</label>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
         <br>
        <td><button type="submit" class="btn btn-primary">update</button></td>
    </form>
</body>
</html>