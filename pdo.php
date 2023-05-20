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
    <title>Document</title>

    <style>
      .btn{
        margin: 5px;

      }
    </style>
</head>
<body>
    
<div class="container">


</div>
<?php
$query = $pdo->query("select * from brand");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $faculty){
       ?>
<table class="table table-stripped">
<tr>
    <td><?php echo $faculty['b_id']?></td> 
    <td><?php echo $faculty['b_name']?></td> 
    <td><a type="submit" class="btn btn-primary" class="text-light" href="update.php?id<?php echo $faculty['b_id'] ?>">update</a>

 </td>
 <td><a type="submit" class="btn btn-primary"class="text-light" href="insert.php?id<?php echo $faculty['b_id'] ?>"> insert</a>
</td>
         
</tr>
</table>

<?php
}

?>




</body>
</html>