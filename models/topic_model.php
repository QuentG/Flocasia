<?php

class Topic
{

	public $id;
	/**
	 * Get all topic
	 */
	public static function getAllTopic()
	{
		global $DB;

		// Recup des topic
		$topics = $DB->fetch('SELECT * FROM forum_topics', [], true);
		return $topics;
	}

	/**
	 * Recup category + subcatecory for a topic
	 */
	public static function getCategories()
	{
		global $DB;

		$categories = $DB->fetch('SELECT * FROM forum_categories', [], true);
		return $categories;

	}

	public static function getSubCategories($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$subcat = $DB->fetch('SELECT * FROM forum_subcategories WHERE id_categories = ?', [$id], true);
		return $subcat;
	}


	public static function getTopicFromCategory($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$sql = "SELECT * FROM forum_topics
			INNER JOIN forum_topicscategorie ON forum_topics.id = forum_topicscategorie.id_topic
			INNER JOIN forum_categories ON forum_topicscategorie.id_categorie = forum_categories.id
			INNER JOIN forum_subcategories ON forum_topicscategorie.id_subcategorie = forum_subcategories.id
			WHERE forum_categories.id = ?";

		$topics = $DB->fetch($sql, [$id], true);
		return $topics;
	}

	/**
	 * @param $id
	 * @return array|mixed
	 */
	public static function getTopicFromSubCategory($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$sql = "SELECT * FROM forum_topics
			INNER JOIN forum_topicscategorie ON forum_topics.id = forum_topicscategorie.id_topic
			INNER JOIN forum_categories ON forum_topicscategorie.id_categorie = forum_categories.id
			INNER JOIN forum_subcategories ON forum_topicscategorie.id_subcategorie = forum_subcategories.id
			WHERE forum_subcategories.id = ?";

		$topics = $DB->fetch($sql, [$id], true);
		return $topics;
	}

	/**
	 * @param $titre
	 * @return bool|string
	 */
	public static function urlEncode($titre)
	{
		$titre = htmlspecialchars($titre);
		$find = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Œ', 'œ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Š', 'š', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Ÿ', '?', '?', '?', '?', 'Ž', 'ž', '?', 'ƒ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
		$replace = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
		$titre = str_replace($find, $replace, $titre);
		$titre = strtolower($titre);
		$mots = preg_split('/[^A-Z^a-z^0-9]+/', $titre);
		$encoded = "";

		foreach($mots as $mot) {
			if(strlen($mot) >= 3 OR str_replace(['0','1','2','3','4','5','6','7','8','9'], '', $mot) != $mot) {
				$encoded .= $mot.'-';
			}
		}
		$encoded = substr($encoded, 0, -1);
		return $encoded;
	}
}


/*
 * "SELECT * FROM forum_topics INNER JOIN forum_topicscategorie ON forum_topics.id = forum_topicscategorie.id_topic INNER JOIN forum_categories ON forum_topicscategorie.id_categorie = forum_categories.id INNER JOIN forum_subcategories ON forum_topicscategorie.id_subcategorie = forum_subcategories.id WHERE forum_categories.id = ?";
 */