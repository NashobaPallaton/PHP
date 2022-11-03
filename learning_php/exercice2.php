<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<?php
$n=12;
for($ligne=1;$ligne<$n;$ligne++)
{
if($ligne%2){$class='impair';}else{$class='pair';}
echo "<tr class=\"$class\">";
for($col=1;$col<=$n;$col++)
{
if($ligne==1 || $col==1){$cellule='th';}else{$cellule='td';}
echo "<$cellule>";
if($ligne==$col){echo '<strong>';}
if($ligne!=1 || $col!=1){echo $ligne*$col;}
if($ligne==$col){echo '</strong>';}
echo "</$cellule>";
}
echo "</tr>\n";
}
?>
</table>
</body>
</html>