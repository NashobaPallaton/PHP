<?php
// demarrer la session
session_start();


// l'id existe et ,n'est pas vide ?
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');

// nettoyer l'id envoyé (strip_tags enlève les balises pour injection de code)
    $id = strip_tags($_GET['id']);
    
    $sql = 'SELECT * FROM `liste` WHERE `id` = :id;'; //':id' pour injection

    $query = $db->prepare($sql);

//accrocher les paramètres (id)
    $query->bindValue(':id', $id, PDO::PARAM_INT); //PRAM_INT pour assurer le typage

    $query->execute();

    $produit = $query->fetch();

//verifier que le produit existe
    if(!$produit){
        $_SESSION['erreur'] = "Le produit n'existe pas!";
        header('Location: index.php');
    }
}else{
    $_SESSION['erreur'] = "URL Invalide";
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col_12">
                <h1>Détails du produit <?= $produit['produit'] ?></h1>
                <p>Produit :  <?= $produit['produit'] ?><p>
                <p>Prix :  <?= $produit['prix'] ?><p>
                <p>Stock :  <?= $produit['nombre'] ?><p>
                <p><a href="index.php">Retour</a> | <a href="edit.php?id<?= $produit['id'] ?>">Modifier</a></p>
            </section>
        </div>
    </main>
</body>
</html>