<!doctype html>
<html lang="fr">
<head>

	<?php include_once 'views/includes/head.php'?>

	<title><?= ucfirst($page) ?></title>
</head>

<body>

	<?php include_once 'views/includes/header.php'?>
    <div class="container mt-5 col-xl-10">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Catégories</th>
                    <th>Messages</th>
                    <th>Derniers messages</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($allCategories as $category => $allSubCategories) { ?>
                <tr>
                    <td>
                        <h4><a href=""><?= $category ?></a></h4>
                        <p>
                        <?php foreach ($allSubCategories as $subcategory) { ?>
                            <a href=""><?= $subcategory['nom'] ?></a> |
						<?php } ?>
                        </p>
                    </td>
                    <td>300000</td>
                    <td>01.02.2019 à 20h<br/>de QuentG</td>
                </tr>
            </tbody>
        <?php } ?>
        </table>
    </div>


	<?php include_once 'views/includes/footer.php'?>

</body>
</html>