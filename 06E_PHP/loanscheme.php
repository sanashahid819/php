<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <title>Loan Scheme</title>
</head>
<body>
  

 <div class="container">
 <form method="post"  action="" >
 <div class="form-group">
     <label for="">Enter Your Name</label>
     <input id="" placeholder="Enter Your Name"  class="form-control" type="text" name="name">
 </div>
 <div class="form-group">
     <label for="">Enter Your Age</label>
     <input id=""  placeholder="Enter Your Age"  class="form-control" type="number" name="age">
 </div>
 <div class="form-group">
     <label for="">Enter Your Salary</label>
     <input id=""  placeholder="Salary" class="form-control" type="text" name="salary">
 </div>
 <div class="form-group">
     <label for="">Enter Your Home Amount</label>
     <input id=""  placeholder="Home Amount between 1000000 to 4000000"  class="form-control" type="text" name="l_amount">
 </div>
 <div class="form-group">
     <label for="">Enter Advanced Amount</label>
     <input id=""  placeholder="Advanced Amount" class="form-control" type="text" name="a_amount">
 </div>
 
 <div class="form-group">
   <label for="">Select Year</label>
   <select class="form-control" name="year" id="">
     <option >select</option>
     <option>5</option>
     <option>10</option>
     <option>20</option>
   </select>
 </div>
 <input type="submit" value="submit" class="btn btn-dark" name="loan">
 
 </form>
 </div>
  <?php

if(isset($_POST["loan"])){
$name=$_POST["name"];
$age=$_POST["age"];
$salary=$_POST["salary"];
$l_amount=$_POST["l_amount"];
$a_amount=$_POST["a_amount"];
$year=$_POST["year"];
$cal=$a_amount-($l_amount/($year*12));


 

if 
($age>25 && $salary>25000 && ($l_amount>=1000000 && $l_amount<=4000000 ))
  {
    echo  $name.  " You are eligible for this scheme. <br> you will pay " .$cal. " at every month till " .$year. "years";
}
else{
    echo $name. "You are not Eligible for this scheme"  ;
}

}    

?>

</body>
</html>