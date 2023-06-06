<?php
include("query.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.min.css">
    <title>Insert</title>
</head>
<body>

<div class="container">
    <form action="" method='post' enctype='multipart/form-data'>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name='name' class="form-control">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" name='price' class="form-control">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name='image' class="form-control">
        </div>
        <div class="form-group">
            <label for="">Category</label>
           <select name="c_id" id="">
            <option value="" class='form-control'>Select</option>
            <?php
            $query = $pdo->query('select * from category');
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $category){
                ?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['id'] ?></option>
                <?php
            }
            ?>
           </select>
        </div>
        <button type='submit' name='addProduct'>Add</button>
    </form>
</div>
    
</body>
</html>
