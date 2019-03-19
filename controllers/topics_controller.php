<?php

if(isset($_GET['categorie']) && !empty($_GET['categorie']))
{
	$category = str_secur($_GET['categorie']) ?? false;
	$categories = array();
	$req = Topics::getCategories();

	foreach ($req as $cat) {
		array_push($categories, array($cat['id'], Topics::urlEncode($cat['name'])));
	}

	foreach ($categories as $cat) {
		// Verif que ce soit dans l'array
		if (in_array($category, $cat)) {
			// Int
			$id_cat = intval($cat[0]);
		}
	}

	if ($id_cat) {

		$subcategory = str_secur($_GET['subcategorie']) ?? false;
		$subcategories = array();

		$subcats = Topics::getSubCategories($id_cat);

		foreach ($id_subcat as $sc)
		{
			array_push($subcategories, array($sc['id'], Topics::urlEncode($sc['nom'])));
		}

		foreach ($subcategories as $sc) {
			// Verif que ce soit dans l'array
			if (in_array($subcategory, $sc)) {
				// Int
				$id_subcategory = intval($cat[0]);
			}
		}

		// Add subcat or not
		if ($id_subcategory) {
			$topics = Topics::getTopicFromSubCategory($id_subcategory);
		} else {
			$topics = Topics::getTopicFromCategory($id_cat);
		}

	} else {

		die('Category not found SOZ');
	}

	} else {

		die("Pas ouf");
}