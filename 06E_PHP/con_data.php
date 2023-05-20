<?php
include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <title>connection data </title>
</head>
<body>
<div class="container mt-5">
<?php
$query = $pdo->query("select * from faculty ");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $faculty){
    ?>
<table class="table table-striped">
    <tr>
       <td><?php echo $faculty['f_id'] ?></td>
        <td><?php echo $faculty['f_name'] ?></td>
        <td><?php echo $faculty['email'] ?></td>
        <td><?php echo $faculty['salary'] ?></td>
        <td><button class="btn btn-primary">
        <a class="text-light" href="update.php?id<?php echo $faculty['f_id'] ?>">update</a>
        </button></td>
    </tr>
</table>
<?php

}


?>


</div>


</body>
</html>