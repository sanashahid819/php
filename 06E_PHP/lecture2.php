<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    <style>
        td{
            padding: 5px 10px;
        }
    </style>
</head>
<body>


<table cellspacing="5px" border="1px">
<thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
    </tr>
</thead>
<tbody>

<?php
for($i=1; $i<=10 ; $i++){



    echo "<tr>".
    "<td>".$i."</td>".
    "<td>"."</td>".
    "<td>"."</td>".
    "<tr>";

}

?>



</tbody>

</table>


</body>
</html>