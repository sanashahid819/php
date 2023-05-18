<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Board of FSC</h1>
   


<?php
if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $fName = $_POST['fName'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $school = $_POST['school'];
    $urdu = $_POST['urdu'];
    $isl = $_POST['isl'];
    $sindhi = $_POST['sindhi'];
    $eng = $_POST['eng'];
    $math = $_POST['math'];
    $chem = $_POST['chem'];
    $chemPr = $_POST['chemPr'];
    $phy = $_POST['phy'];
    $phyPr = $_POST['phyPr'];
    $comp = $_POST['comp'];

    $obtain = $urdu+$isl+$sindhi+$eng+$math+$chem+$chemPr+$phy+$phyPr+$comp;
}
?>
<div class="container">
    <h6>Student Name : <?php echo  ' '.$name?></h6>
    <h6>Father Name : <?php echo  ' '.$fName?></h6>
    <h6>Class : <?php echo  ' '.$class?></h6>
    <h6>Roll no : <?php echo  ' '.$roll?></h6>
    <h6>School : <?php echo  ' '.$school?></h6>
</div>
 <!-- <table border="1px" class="container">
        <tr>
            <td>Name:</td>
            <td><?php echo $name?></td>
            </tr>
            <tr>
                <td>Father name:</td>
            <td><?php echo $fName?></td>
            </tr>
            <tr>
                <td>Class:</td>
            <td><?php echo $class?></td>
            </tr>
            <tr>
                <td>Roll no:</td>
            <td><?php echo $roll?></td>
            </tr>
            <tr>
                <td>School:</td>
            <td><?php echo $school?></td>
        </tr>
    </table> -->
    <table border="3px" class="container"   >
        <tr>
            <td>Comp1</td>
            <td>Marks</td>
            <td>Comp2</td>
            <td>Marks</td>
        </tr>
        <tr>
            <td>Sindhi</td>
            <td><?php echo $sindhi?></td>
            <td>Physics</td>
            <td><?php echo $phy?></td>
            </tr>
            <tr>
            <td>Math</td>
            <td><?php echo $math?></td>
            <td>Physics Pr.</td>
            <td><?php echo $phyPr?></td>
            </tr>
            <tr>
            <td>English</td>
            <td><?php echo $eng?></td>
            <td>Chemistry</td>
            <td><?php echo $chem?></td>
            </tr>
            <tr>
            <td>Urdu</td>
            <td><?php echo $urdu?></td>
            <td>Chemistry Pr.</td>
            <td><?php echo $chemPr?></td>
            </tr>
            <tr>
            <td>Computer</td>
            <td><?php echo $comp?></td>   
        </tr>
    </table>
    <div class="container">
        <h6>Obtain Marks :<?php " ". $obtain?></h6>
        <h6>Grade :<?php
        if($obtain >= 800){
            echo "A+";
        }
        elseif ($obtain >= 600){
            echo "A";
        }
        elseif ($obtain >= 500){
            echo "B";
        }
        elseif ($obtain >= 400){
            echo "C";
        }
        elseif ($obtain < 400){
            echo "Fail";
        };
         ?></h6>
    </div>
    <table>
        <tr>
            <td>Obtain Marks</td>
            <td>=</td>
            <td><?php echo $obtain?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td>=</td>
            <td>
                <?php
                if($obtain >= 800){
                    echo "A+";
                }
                elseif ($obtain >= 600){
                    echo "A";
                }
                elseif ($obtain >= 500){
                    echo "B";
                }
                elseif ($obtain >= 400){
                    echo "C";
                }
                elseif ($obtain < 400){
                    echo "Fail";
                };
            ?>
            </td>
        </tr>
    </table>
    </div>

    
</body>
</html>
