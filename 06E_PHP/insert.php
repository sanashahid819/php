<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <title>insert</title>
</head>
<body>
  <div class="container">
    <form action="" method="post">
    <!-- <div class="form-group">
  <label for="">id</label>
  <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div> -->
<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Salary</label>
  <input type="text" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<button name="ins" type="submit">Insert</button>

    </form>

  </div>
<?php
    if(isset($_POST['ins'])){

        // $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $query =  $pdo->prepare("insert into faculty(f_name,email,salary)values(:name,:email , :salary)");
        $query->bindParam('name',$name);
        $query->bindParam('email',$email);
        $query->bindParam('salary',$salary);
        $query->execute();
         echo "data successfully inserted";


    }

?>



</body>
</html>