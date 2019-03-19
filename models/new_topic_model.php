<?php

class NewTopic
{

	public $id;
	public $id_categories;

	/**
	 * Add a topic
	 */
	public static function addTopic($subject, $msg)
	{
		global $DB;

		$add = $DB->execute("INSERT INTO forum_topics (id_createur, sujet, contenu, date_creation) VALUES (?,?,?,NOW())", [0, $subject, $msg]);

		return $add;
	}

	public static function addTopicCategory($id_topic, $id_category, $id_subcategory)
	{
		global $DB;

		$add = $DB->execute('INSERT INTO forum_topicscategorie (id_topic, id_categorie, id_subcategorie) VALUES (?,?,?)', [$id_topic, $id_category, $id_subcategory]);

		return $add;
	}

	public static function getCategory($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$cat = $DB->fetch('SELECT * FROM forum_categories WHERE id = ?', [$id], false);

		return $cat;
	}

	public static function getAllSubCategories($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$subcat = $DB->fetch('SELECT * FROM forum_subcategories WHERE id_categories = ? ORDER BY nom', [$id], true);

		return $subcat;
	}

	public static function getCatAndSubCat($id, $id_categories)
	{
		global $DB;

		$id = str_secur($id) ?? false;
		$id_categories = str_secur($id_categories) ?? false;

		$get = $DB->fetch('SELECT id FROM forum_subcategories WHERE id = ? AND id_categories = ?', [$id, $id_categories], false);

		return $get;
	}

	public static function last_topic()
	{
		global $DB;

		$lt = $DB->fetch("SELECT id FROM forum_topics ORDER BY id DESC LIMIT 0,1", [], false);

		return $lt;
	}
}