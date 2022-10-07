<html>
<head>
<title>
Connexion à MySQL avec PDO
</title>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="tabstyle.css" />
</head>
<body>
<h1>
Interrogation de la table CARNET avec PDO
</h1>

<?php
require("conn.php");
function connect_bd(){
	$dsn="mysql:dbname=".BASE.";host=".SERVER;
		try{
		$connexion=new PDO($dsn,USER,PASSWD);
		}
		catch(PDOException $e){
		printf("Échec de la connexion : %s\n", $e->getMessage());
		exit();
		}
	return $connexion;
}
?>

<?php
require_once('conn.php');
$connexion=connect_bd();
$sql="SELECT * from CARNET";
if(!$connexion->query($sql)) echo "Pb d'accès au CARNET";
else{
?>
<table class="table table-dark table-striped">
<tr> <td> ID </td> <td> Prénom </td> <td> Nom </td><td> Naissance </td> </tr>
  <?php
  foreach ($connexion->query($sql) as $row)
echo "<tr><td>".$row['ID']."</td>
          <td>".$row['PRENOM']."</td>
          <td>".$row['NOM']."</td>
          <td>".$row['NAISSANCE']."</td></tr><br/>\n";
  ?>
</table>
<?php } ?>
</body>
</html>