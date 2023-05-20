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
    <h1>insert</h1>
    <form action="" method="post">
        <!-- <div class="form-control">
            <label for="">id:</label>
            <input type="text" name="id" class="form-control" placeholder="id">
        </div> -->
        <br>
        <div class="form-control">
            <label for="">name:</label>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>
         <br>
        <td><button  name ="ins"type="submit" class="btn btn-primary">insert</button></td>
    </form>
</div>
<?php
if(isset($_POST['ins'])){
    $name =$_POST['name'];
    $query=$pdo->prepare("insert into brand(b_name) values(:name)");
    $query-> bindparam('name',$name);
    $query->execute();
echo" data successfully added";

}


?>



</body>
</html>