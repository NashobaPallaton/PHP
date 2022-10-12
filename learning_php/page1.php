<?php
    session_start();

    $mon_texte = htmlspecialchars($_GET['s']);

    $_SESSION['mon_texte'] = $mon_texte;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

<form method="GET" >
        <input type="search" name="s" placeholder="entrez une phrase">
        <input type="submit" name="Rechercher" class="btn btn-outline-success">
</form>

<button type="button" class="btn btn-link-light" id="btn"><a href="index.php"><<</a></button>
<button type="button" class="btn btn-link-light" id="btn"><a href="page2.php">>></a></button>

</body>
</html>
