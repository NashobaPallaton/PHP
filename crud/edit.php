<?php 
// demarrer la session
session_start();

if($_POST){
    if(isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['produit']) && !empty($_POST['produit'])
    && isset($_POST['prix']) && !empty($_POST['prix'])
    && isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        require_once('connect.php');

        // nettoyage des données envoyées
        $id = strip_tags($_POST['id']);
        $produit = strip_tags($_POST['produit']);
        $prix = strip_tags($_POST['prix']);
        $nombre = strip_tags($_POST['nombre']);

        $sql = 'UPDATE `liste` SET (`produit`=:produit, `prix`=:prix, `nombre`=:nombre) WHERE `id`=:id;';

        $query = $db->prepare($sql);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':produit', $produit, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nombre', $nombre, PDO::PARAM_INT);

        $query->execute();

        $_SESSION['message'] = "Produit modifié";        
        require_once('close.php');
        header('Location: index.php');

    }else{
            $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

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



// inclure connection
require_once('connect.php');

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier des produit</title>
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
                <h1>Ajouter un produit</h1>
                <form method="post">
                    <div class="form-group">
                        <label for="produit">Produit</label>
                        <input type="text" id="produit" name="produit" class="form-control" value="<?= $produit['produit']?>">
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="text" id="prix" name="prix" class="form-control" value="<?= $produit['prix']?>">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="number" id="nombre" name="nombre" class="form-control" value="<?= $produit['nombre']?>">
                    </div>
                    <input type="hidden" value="<?= $produit['id']?>" name="id">
                    <p></p>
                    <button class="btn btn-primary">Envoyer</button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>