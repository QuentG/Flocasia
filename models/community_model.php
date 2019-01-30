<?php


class Categories
{

	public $id;
	public $name;


	/**
	 * Récupérer une catégorie par son ID
	 * @param $id
	 * @return array|mixed
	 */
	static function getCategory($id)
	{
		global $DB;

		$id = str_secur($id);

		$cat = $DB->fetch('SELECT * FROM forum_categories WHERE id = ?', [$id], false);

		return $cat;
	}


	/**
	 * Récupérer toute les catégories / Sous catégories d'une catégories
	 * @return array
	 */
	static function getAllCategories ()
	{
		global $DB;

		$categories = $DB->fetch('SELECT * FROM forum_categories ORDER BY name', [], true);

		$allCat = [];
		foreach ($categories as $category) {
			$subCategories = $DB->fetch('SELECT * FROM forum_subcategories WHERE id_categories = ? ORDER BY nom', [$category['id']], true);
			$allCat[$category['name']] = $subCategories;

		}

		return $allCat;
	}
}