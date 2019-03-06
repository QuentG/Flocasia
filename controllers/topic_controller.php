<?php

if(isset($_GET['categorie']) && !empty($_GET['categorie']))
{
	$category = str_secur($_GET['categorie']) ?? false;
	$categories = array();
	$req = Topic::getCategories();

	foreach ($req as $cat) {
		array_push($categories, array($cat['id'], Topic::urlEncode($cat['name'])));
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

		$subcats = Topic::getSubCategories($id_cat);
		debug($subcats);

		foreach ($id_subcat as $sc)
		{
		array_push($subcategories, array($sc['id'], Topic::urlEncode($sc['nom'])));
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
			$topics = Topic::getTopicFromSubCategory($id_subcategory);
		} else {
			$topics = Topic::getTopicFromCategory($id_cat);
		}

		debug($topics);


	} else {
		die('Category not found SOZ');
	}
	} else {
}