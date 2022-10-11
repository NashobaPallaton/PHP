<?php 
$bdd = new PDO('mysql:host=localhost;dbname=vroomissimo', 'root', '');
$query = 'SELECT * from vehicule';
$allcars = $bdd->query($query);
if(isset($_GET['s']) or isset($_GET['consomation']) or isset($_GET['modele'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $consomation = htmlspecialchars($_GET['consomation']);
    $modele = htmlspecialchars($_GET['modele']);
    $conditions = array();

    if(!empty($recherche)) {
      $conditions[] = 'marque like "%'.$recherche.'%"';
    }
    if(!empty($consomation)) {
      $conditions[] = 'consomation like "%'.$consomation.'%"';
    }
    if(!empty($modele)) {
        $conditions[] = 'modele like "%'.$modele.'%"';
    }

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }
    $allcars = $bdd->query($sql);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Moteur de Recherche</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1 class="titre">Vroomissimo</h1>
    <div class="formulaire">
    <form method="GET" >
        <label for="s">Recherchez par Marque:</label><br/>
        <input type="search" name="s" placeholder="Rechercher une marque" autocomplete="off">
        <input type="submit" name="Rechercher">
        <br/>
        <label for="consomation">Filtrer par consomation:</label><br/>
        <input type="search" id="consomation" name="consomation">
        <br/>
        <label for="modele">Filtrer par modele:</label><br/>
        <input type="search" id="modele" name="modele">
        <br/>
        <br/>
        <a href="http://localhost/php/moteur-pdo-better/index.php">Reinitialiser la Recherche</a>
        
    </form>
    </div>
    <br/><br/><br/>
    <section class="afficher_vehicule">
    <table class="table table-dark table-striped">
                    <tr> <td> Marque </td> <td> Modèle </td> <td> prix </td><td> consomation </td></tr>
        <?php 

            if($allcars->rowCount() > 0)  {
                  while($vehicule = $allcars->fetch()) {
                    ?>
                    
                    <?php
                    echo "<tr><td>".$vehicule['nom_marque']."</td>
                    <td>".$vehicule['nom_model']."</td>
                    <td>".$vehicule['prix']."</td>
                    <td>".$vehicule['carburant']."</td></tr>\n";
                    ?>
                    <?php
                  }  

            }else {
                ?>
                <p>No match found</p>
                <?php
            }
        
        
        ?>

    </section>
</body>
</html>