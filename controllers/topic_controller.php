<?php

$allTopics = Topic::getAllTopic();

if(isset($_GET['categorie']) && !empty($_GET['categorie'])) {

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
		if(isset($_GET['subcategorie']) && !empty($_GET['subcategorie'])) {

			$subcategory = str_secur($_GET['subcategory']) ?? false;
			$subcategories = array();
			$id_subcat = Topic::getSubCategories($id);

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
		}

		// Sql
		$sql = "SELECT * FROM forum_topics 
						INNER JOIN forum_topicscategorie ON forum_topics.id = forum_topicscategorie.id_topic 
						INNER JOIN forum_categories ON forum_topicscategorie.id_categorie = forum_categories.id 
						INNER JOIN forum_subcategories ON forum_topicscategorie.id_subcategorie = forum_subcategories.id 
						WHERE forum_categories.id = ?";

		// Add subcat or not
		if ($id_subcategory) {
			$sql .= "AND forum_subcategories = ?";
			$push = array($id_cat, $id_subcategory);
		} else {
			$push = array($id_cat);
		}

		// Push topics
		$topics = Topic::pushTopic($sql, $push);

	} else {
		die('Category not found');
	}
} else{
	//die('Pas ouf');
}