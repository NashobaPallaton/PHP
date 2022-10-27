<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$numeroDeMois = intval(date("m"));
$moisFrancais = array(1=>'Janvier','Février','Mars','Avril','Mai','Juin',
                      'Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
$cellColor = array(1=>'blue','white','red','yellow','grey','lime',
                      'lightblue','fuchsia', 'lightgrey','olive','pink','purple');
echo "<table border=1> ";

foreach($moisFrancais as $key => $value) 
{
    print "<td bgcolor=$cellColor[$key]>".$key."</td><td>".$value."</td>" ;
    ($key%3==0) ? print ("</tr><tr>") : print ("");
}
echo "</table>";

// for($i=1;$i<=12;$i++)
// {
//     echo "<td bgcolor=$cellColor[$i]>".$i."</td><td>".$moisFrancais[$i]."</td>" ;
//     ($i%3==0) ? print ("</tr><tr>") : print ("");
// }
// echo "</table>";

?>
    
</body>
</html>
