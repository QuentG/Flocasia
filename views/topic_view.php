<!doctype html>
<html lang="fr">
<head>
	<?php include_once 'views/includes/head.php'?>
	<title><?= ucfirst($page) ?></title>
</head>

<body>

<?php include_once 'views/includes/header.php'?>

<div class="container mt-3">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>Sujet : <?= $topic['sujet'] ?></th>
            </tr>
            <tr>
                <td><?= $topic['contenu'] ?></td>
            </tr>
        </table>
    </div>
</div>

<?php include_once 'views/includes/footer.php'?>

</body>
</html>