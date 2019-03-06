<!doctype html>
<html lang="fr">
<head>
	<?php include_once 'views/includes/head.php'?>
	<title><?= ucfirst($page) ?></title>
</head>

<body>

<?php include_once 'views/includes/header.php'?>

<form method="POST">
	<table>
		<tr>
			<th colspan="2">Nouveau Topic</th>
		</tr>
		<tr>
			<td>Sujet</td>
			<td><input type="text" name="sujet" size="20" maxlength="20" /></td>
		</tr>
		<tr>
			<td>Catégorie</td>
			<td>
				<select>
					<option>Catégorie 1</option>
					<option>Catégorie 2</option>
					<option>Catégorie 3</option>
					<option>Catégorie 4</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Sous-Catégorie</td>
			<td>
				<select>
					<option>Sous-Catégorie 1</option>
					<option>Sous-Catégorie 2</option>
					<option>Sous-Catégorie 3</option>
					<option>Sous-Catégorie 4</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Message</td>
			<td><textarea name="msg"></textarea></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="subform" value="Poster le Topic" /></td>
		</tr>
		<?php if(isset($error)) { ?>
			<tr>
				<td colspan="2"><?= $error ?></td>
			</tr>
		<?php } ?>
	</table>
</form>

<?php include_once 'views/includes/footer.php'?>

</body>
</html>