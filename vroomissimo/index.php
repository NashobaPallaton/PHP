<html>
<head>
<title>
Vroomissimo
</title>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
</head>
<body>
<h1>
Vroomissimo
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
$sql="SELECT * from vehicule";
if(!$connexion->query($sql)) echo "Pb d'accès au VEHICULE";
else{
?>
<table class="table table-dark table-striped">
<tr> <td>Immatriculation</td> <td>Prix</td> <td>Année</td><td>KM</td> <td>Carburant</td> <td>Model</td> <td>Puissance(CH)</td> </tr>
  <?php
  foreach ($connexion->query($sql) as $row)
echo "<tr><td>".$row['Immatriculation']."</td>
          <td>".$row['Prix']."</td>
          <td>".$row['annee']."</td>
          <td>".$row['Km']."</td>
		  <td>".$row['Id_Consomation']."</td>
		  <td>".$row['Id_Model']."</td>
		  <td>".$row['Id_Motorisation']."</td></tr><br/>\n";
  ?>
</table>
<?php } ?>
</body>
</html>