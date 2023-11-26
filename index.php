<?php 
    include('connexion.php');
    require_once('database/connexion.php');

    $sql = 'SELECT * FROM articles';
    $data = $condb->prepare($sql);
    $data->execute();
    $articles = $data->fetchAll(PDO::FETCH_ASSOC);
    var_dump($articles);
    die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        section a{
            display: inline-block;
        }
        .thc{
            margin: 20px;
        }
        table thead th {
            border-bottom: 2px solid black;
            width: 120px;
        }
        table{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <section>
                <h1>Liste des articles</h1>
                <a href="" class="btn-primary">Ajouter un article</a>
                <table>
                    <thead>
                        <th class="thc">ID</th>
                        <th class="thc">name</th>
                        <th class="thc">price</th>
                        <th class="thc">stock</th>
                        <th class="thc">actions</th>
                    </thead>
                    <tbody>
                    <?php foreach($articles as $article) { ?>
                        <tr>
                            <td><?= $article['id'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>