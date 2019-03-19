<?php

if(isset($_GET['category']))
{
	$get_category = str_secur($_GET['category']) ?? false;

	$category = NewTopic::getCategory($get_category);

	if($category < 1 || empty($category))
	{
		die('Category invalid');
	}

	// Recup name category
	$category = $category['name'];

	$subcategories = NewTopic::getAllSubCategories($get_category);

	if (isset($_POST['subform']))
	{
		if (isset($_POST['sujet']) && isset($_POST['msg']))
		{
			$subject = str_secur($_POST['sujet']) ?? false;
			$msg = str_secur($_POST['msg']) ?? false;
			$subcategory = str_secur($_POST['subcat']) ?? false;

			$check_id = NewTopic::getCatAndSubCat($subcategory, $get_category);

			if($check_id)
			{
				if (empty($subject) || empty($msg)) {
					$error = "Veuillez remplir tous les champs";
				}

				if (strlen($subject) <= 20) {

					$add_topic = NewTopic::addTopic($subject, $msg);

					$last_topic = NewTopic::last_topic();
					// Recup last topic ID
					$topic_id = $last_topic['id'];

					$add_topic_category = NewTopic::addTopicCategory($topic_id, $get_category, $subcategory);


				} else {
					$error = "Votre sujet ne peut pas dépasser 20 caractères";
				}
			} else {
				$error = "Sous-categorie invalide";
			}
		}
	}
} else {
	die('Category not defined');
}

