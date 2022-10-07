<?php
require('./config.php');
use TeamTNT\TNTSearch\TNTSearch;

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

$indexer = $tnt->createIndexer('articles.index');
$indexer->query('SELECT id, title, content FROM articles');
$indexer->setLanguage('french');
$indexer->run();