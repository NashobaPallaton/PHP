<?php
//déclarer une variable de type booléen

    $variable = true;
    $variable2 = false;

//exemple d'utilisation


if($variable == true){
    echo 'Ma variable renvoie la veleur VRAI';
}

//diferents types de variables

$text = "la marche des vertueux est semée d'obstacles, qui sont les entreprises égoïstes que fait sans fin, surgire l'oeuvre du malin.";

$booleen = true;

$chiffre = 21;

$tableau = arrray();

$var = "SELECT * FROM ..."; //requète SQL

?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=user_php_test', 'root', '');
$query = "SELECT * FROM users";
?>

//utlilisation du foreach pour afficher les données SQL dans un tableau
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
</html>
<table class="table table-dark table-striped">
  <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
  </tr>
  <?php
    foreach($req as $r){
  ?>   
    <tr>
      <td><?= $r['id_user'] ?></td>
      <td><?= $r['nom'] ?></td>
      <td><?= $r['prenom'] ?></td>
    </tr>
  <?php
  }
  ?>
</table>
</body>