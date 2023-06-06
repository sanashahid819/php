<?php
include("connection.php");


<?php

session_start();
include("connection.php");

if(isset($_POST['addProduct'])){
    $prodName = $_POST['name'];
    $prodPrice = $_POST['price'];
    $prodCtg = $_POST['c_id'];
    $prodImage = $_FILES['image']['name'];
    $prodImageSize = $_FILES['image']['size'];
    $prodImageTmpName = $_FILES['image']['tmp_name'];
    $prodImageExt = pathinfo($prodImage,PATHINFO_EXTENSION);
    $destination = "images/".$prodImage;

    if($prodImageSize <= 4800000){
        if($prodImageExt == "jpg" || $prodImageExt == "jpeg" || $prodImageExt == "webp" || $prodImageExt == "png"){
            if(move_uploaded_file($prodImageTmpName,$destination)){
                $query = $pdo->prepare("insert into products(p_name, p_price, p_image, c_id) values (:name, :price, :image, :c_id)");
                $query->bindParam('name',$prodName);
                $query->bindParam('price',$prodPrice);
                $query->bindParam('image',$prodImage);
                $query->bindParam('c_id',$prodCtg);
                $query->execute();
                echo "<script>alert('product added successfully')</script>";
            }
            else{
                echo "<script>alert(product not added)</script>";
            };
        }
        else{
            echo "<script>alert('Invalid extension')
            location.assign('insert.php');
            </script>";
        };
    }
    else{
        echo "File size is greater";
    };
}

?>



if(isset($_POST['login'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
    $query = $pdo ->prepare ("select * from user where name =:name AND password =:password ");
    $query -> bindParam(':name',$username);
    $query -> bindParam(':password',$password);
    $query -> execute();
    $row = $query -> fetch(PDO::FETCH_ASSOC);
    if($row){
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
       echo" successsfully login";}
        
        else{
            echo" not login!";


}



};



?>

