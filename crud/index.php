<?php
// demarrer la session
session_start();

// inclure connection
require_once('connect.php');

$sql = 'SELECT * FROM `liste`';

// préparer la requête
$query = $db->prepare($sql);

// executer la requêtre
$query->execute();

// stoker le resultat dans un tableau
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert-danger" role="alert">
                               '. $_SESSION['erreur'].'
                              </div>';
                        $_SESSION['erreur'] = "";
                    }
                ?>
                <?php
                    if(!empty($_SESSION['message'])){
                        echo '<div class="alert alert-success" role="alert">
                               '. $_SESSION['message'].'
                              </div>';
                        $_SESSION['message'] = "";
                    }
                ?>
                <h1>Liste des produits</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Produit</th>
                        <th>Prix (€)</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        // boucler sur la variable result
                        foreach ($result as $produit){
                        ?>
                            <tr>
                                <td><?= $produit['id'] ?></td>
                                <td><?= $produit['produit'] ?></td>
                                <td><?= $produit['prix'] ?></td>
                                <td><?= $produit['nombre'] ?></td>
                                <td><a href="detail.php?id=<?= $produit['id'] ?>">Voir</a>/<a href="edit.php?id=<?= $produit['id'] ?>">Modifier</a>/<a href="edit.php?id=<?= $produit['id'] ?>">Effacer</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="add.php" class="btn btn-primary">Ajouter un produit</a>
            </section>
        </div>
    </main>
</body>
</html>