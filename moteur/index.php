<?php
require('./config.php');
use TeamTNT\TNTSearch\TNTSearch;
 
$articles = [];
if (!empty($_GET['q'])) {
 
    $tnt = new TNTSearch;
 
    $tnt->loadConfig([
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'test',
        'username'  => 'root',
        'password'  => '',
        'storage'   => '.',
        'stemmer'   => \TeamTNT\TNTSearch\Stemmer\PorterStemmer::class
    ]);
    $tnt->selectIndex("articles.index");
 
    $searchResult = $tnt->search($_GET['q'], 10);
    $ids = implode(",", $searchResult['ids']);
 
    $q = $db->query("SELECT * FROM articles WHERE id IN ($ids) ORDER BY FIELD(id, $ids)");
 
 
    $q = $db->query("SELECT * FROM articles WHERE CONCAT(title, content) LIKE '%" . $_GET['q'] . "%'");
    $articles = $q->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recherche</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 
    <form method="GET">
        <input type="search" placeholder="Rechercher..." name="q">
        <button type="submit">OK</button>
    </form>
    
    <?php if ($articles): ?>
        <h2>
            R&eacute;sultats<br>
            <small><?= $searchResult['hits'] ?> r&eacute;sultats en <?= $searchResult['execution_time'] ?></small>
        </h2>
 
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <h3>[#<?= $article['id'] ?>] <?= $article['title'] ?></h3>
                    <?= $article['content'] ?>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
    
</body>
</html>