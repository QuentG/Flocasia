<?php

class NewTopic
{

	/**
	 * Add a topic
	 */
	public static function addTopic()
	{
		global $DB;

		if (isset($_POST['subform']))
		{
			if (isset($_POST['sujet']) && isset($_POST['msg']))
			{
				$sujet = str_secur($_POST['sujet']) ?? false;
				$msg = str_secur($_POST['msg']) ?? false;

				if (empty($sujet) || empty($msg))
				{
					$error = "Veuillez remplir tous les champs";
				}

				if (strlen($sujet) <= 20)
				{
					$add_topic = $DB->execute("INSERT INTO forum_topics (id_createur, sujet, contenu, date_creation) VALUES(?,?,?,NOW())", [0, $sujet, $msg]);

				} else {
					$error = "Votre sujet ne peut pas dépasser 20 caractères";
				}
				}
			}
		}
}