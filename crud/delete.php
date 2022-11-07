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
        die;
    }
 
    $sql = 'DELETE FROM `liste` WHERE `id` = :id;'; //':id' pour injection

    $query = $db->prepare($sql);

//accrocher les paramètres (id)
    $query->bindValue(':id', $id, PDO::PARAM_INT); //PRAM_INT pour assurer le typage

    $query->execute();
    $_SESSION['message'] = "Produit suprimmé";
    header('Location: index.php');

}else{
    $_SESSION['erreur'] = "URL Invalide";
    header('Location: index.php');
}
