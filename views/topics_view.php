<!doctype html>
<html lang="fr">
<head>
	<?php include_once 'views/includes/head.php'?>
	<title><?= ucfirst($page) ?></title>
</head>

<body>

<?php include_once 'views/includes/header.php'?>

<div class="container mt-3">
	<table class="table table-striped">
		<tr>
			<th>Sujet</th>
			<th>Messages</th>
			<th>Dernier message</th>
			<th >Création</th>
		</tr>
		<?php foreach ($topics as $key => $topic) { ?>
			<tr>
				<td>
					<h4><a href=""><a href="<?= PATH ?>topic?title=<?= Topics::urlEncode($topic['sujet']) ?>&id=<?= $topic['t_id']?>"><?= $topic['sujet'] ?></a></a></h4>
				</td>
				<td>4329320348</td>
				<td>06.03.2019 à 18h07<br />de QuentG</td>
				<td><?= $topic['date_creation'] ?></td>
			</tr>
		<?php } ?>
	</table>
    <a href="<?= PATH ?>new_topic?category=<?= $id_cat ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Nouveau topic</button></a>
</div>

<?php include_once 'views/includes/footer.php'?>

</body>
</html>