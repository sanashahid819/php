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
<?php
if (isset($_GET['id'])){
   $b_id =$_GET['id'] ;
   $query =$pdo->prepare("select * from brand where b_id =:id");
   $query->bindParam('id',$b_id);
   $query->execute();
   $row =$query->fetch(PDO::FETCH_ASSOC);

}

?>


    <h1>update</h1>
    <form action="" method="post">
        <div class="form-control">
            <label for="">id:</label>
            <input type="text" name="id" value=" <?php echo $row['b_id']?>" class="form-control" placeholder="id">
        </div>
        <br>
        <div class="form-control">
            <label for="">name:</label>
            <input type="text" name="name" value=" <?php echo $row['b_name']?>" class="form-control" placeholder="name">
        </div>
         <br>
        <td><button type="submit" name="update" class="btn btn-primary">update</button></td>
    </form>


    <?php
    if(isset($_POST['update'])){
        // $id =$_POST['id'];
        $name = $_POST['name'];
        $query= $pdo->prepare("update brand set b_name = :name where b_id = :id ");
        $query->bindParam('id',$b_id);
        $query->bindParam('name',$name);
        $query->execute();
        echo "update success";
        
       

    }
    ?>
</body>
</html>