<?php

require('./config.php');

$apiKey = 'd1c5c3f8fb864c94a73300c5aab3803c';

$categories = ['sport', 'fighters', 'fight', 'ufc', 'mma', 'entertainment'];
foreach ($categories as $category) {
    $endpoint = "https://newsapi.org/v2/top-headlines?category=$category&pageSize=100&contry=apiKey=$apiKey";

    $responce = file_get_contents($endpoint);
    $reponse = json_decode($respond);
    var_dump($responce);

    foreach ($response->articles as $article) {
        $q = $db->prepare('INSERT INTO articles (title, author, content, description, imageUrl, publishedAt) VALUES (:title, :author, :content, :description, :imageUrl, :publishedAt)');
        $q->bindValue('title', $article->title);
        $q->bindValue('author', $article->author);
        $q->bindValue('content', $article->content);
        $q->bindValue('description', $article->description);
        $q->bindValue('imageUrl', $article->urlToImage);
        $q->bindValue('publishedAt', date("Y-m-d H:i:s", strtotime($article->publishedAt)));
        $q->execute();
    }
}