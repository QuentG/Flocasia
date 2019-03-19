<?php

class Topic
{

	public $id;

	public static function getTitle($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$get_subject = $DB->fetch('SELECT sujet FROM forum_topics WHERE id = ?', [$id], false);

		return $get_subject;
	}

	public static function getTopic($id)
	{
		global $DB;

		$id = str_secur($id) ?? false;

		$get_topic = $DB->fetch('SELECT * FROM forum_topics WHERE id = ?', [$id], false);

		return $get_topic;
	}

}