<?php 
$bdd = new PDO('mysql:host=localhost;dbname=vroomissimo', 'root', '');
$query = 'SELECT *
FROM Marque
INNER JOIN Model
ON Id_Marque = Id_Model';
$allcars = $bdd->query($query);
if(isset($_GET['s']) or isset($_GET['modele'])) {
    $recherche = htmlspecialchars($_GET['s']);
    $modele = htmlspecialchars($_GET['modele']);
    $conditions = array();

    if(!empty($recherche)) {
      $conditions[] = 'marque like "%'.$recherche.'%"';
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
    <h1>Vroomissimo</h1>
    <form method="GET" >
        <label for="s">Recherchez par Marque:</label><br/>
        <input type="search" name="s" placeholder="Rechercher une marque" autocomplete="off">
        <input type="submit" name="Rechercher">
        <br/>
        <label for="modele">Chercher modele:</label><br/>
        <input type="search" id="modele" name="modele">
        <br/>
        <br/>
        
    </form>
    </div>
    <br/><br/><br/>
    <section class="afficher_vehicule">
    <table class="table table-dark table-striped">
                    <tr> <td> Marque </td> <td> Modèle </td></tr>
        <?php 

            if($allcars->rowCount() > 0)  {
                  while($allcars = $allcars->fetch()) {
                    ?>
                    
                    <?php
                    echo "<tr><td>".$vehicule['nom_marque']."</td>
                    <td>".$vehicule['nom_model']."</td></tr>\n";
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