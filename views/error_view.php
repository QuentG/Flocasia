<!doctype html>
<html lang="fr">
<head>

    <?php include_once 'views/includes/head.php'?>

    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php'?>
    <div class="container text-center mt-4">
        <div class="row justify-content-center">
            <h1>Erreur 404 ! Cette page n'existe pas !</h1>
        </div>
        <a href="<?= PATH ?>"><button class="btn btn-primary btn-lg mt-4">Revenir sur le site</button></a>
    </div>

</body>
</html>
