<?php
include("connection.php");






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

