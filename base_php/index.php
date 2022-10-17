<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<?php
 $html = <<<TAB
 <table class="table table-dark">
 <tr>
     <th><strong>N</strong></th>
     <th><strong>P</strong></th>
     <th><strong>A</strong></th>
     <th><strong>S</strong></th>
     <th><strong>P</strong></th>
 </tr>
 <tr class="table table-info">
     <td><i>GASTOUT</i></td>
     <td ><i>Camille</i></td>
     <td><i>28</i></td>
     <td><i>Plusieurs fois par semaine</i></td>
     <td><i>Dev</i></td>
 </tr>
 <tr class="table table-info">
     <td>1</td>
     <td>2</td>
     <td>3</td>
     <td>4</td>
     <td>5</td>
 </tr>
 </table>
 TAB;

echo "$html";
echo ("ceci est un tableau");
?>

</body>
</html>



