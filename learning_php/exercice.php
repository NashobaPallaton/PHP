<?php
$tab = array("jimmy"=>19, "halim"=>18, "greg"=>20, "cedric"=>17, "anthony"=>16, "oceane"=>15);
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
                <table class="table">
                    <thead>
                        <th>Prénom</th>
                        <th>Note</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($tab as $key => $val) {
                        ?>
                            <tr>
                                <td><?= $key ?></td>
                                <td><?= $val ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
            </section>
        </div>
    </main>
</body>
</html>
</body>
</html>
